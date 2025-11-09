<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class StoreCommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        if (!Auth::check() || !Auth::user()->can('create-comments')) {
            return false;
        }

        // Check if thread is locked
        $thread = \App\Models\Thread::find($this->thread_id);
        if ($thread && $thread->is_locked && !Auth::user()->canModerateForum()) {
            return false;
        }

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'thread_id' => 'required|exists:threads,id',
            'content' => 'required|string|min:5|max:5000',
            'parent_id' => 'nullable|exists:comments,id',
            'mentions' => 'nullable|array',
            'mentions.*' => 'exists:users,id',
        ];
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if ($this->parent_id) {
                $parentComment = \App\Models\Comment::find($this->parent_id);
                $thread = \App\Models\Thread::find($this->thread_id);

                // Ensure parent comment belongs to the same thread
                if ($parentComment && $thread && $parentComment->thread_id !== $thread->id) {
                    $validator->errors()->add('parent_id', 'Parent comment does not belong to this thread.');
                }

                // Prevent too deep nesting (max 5 levels)
                if ($parentComment && $parentComment->depth >= 5) {
                    $validator->errors()->add('parent_id', 'Cannot reply to this comment. Maximum nesting level reached.');
                }
            }
        });
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'thread_id.required' => 'Thread ID is required.',
            'thread_id.exists' => 'The specified thread does not exist.',
            'content.required' => 'Please enter a comment.',
            'content.min' => 'Comment must be at least 5 characters long.',
            'content.max' => 'Comment may not be greater than 5,000 characters.',
            'parent_id.exists' => 'The parent comment does not exist.',
            'mentions.*.exists' => 'One or more mentioned users do not exist.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'thread_id' => 'thread',
            'content' => 'comment content',
            'parent_id' => 'parent comment',
        ];
    }
}