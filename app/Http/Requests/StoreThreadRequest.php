<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class StoreThreadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->can('create-threads');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'forum_id' => 'required|exists:forums,id',
            'title' => [
                'required',
                'string',
                'min:5',
                'max:255',
                // Check for duplicate titles in the same forum
                function ($attribute, $value, $fail) {
                    $exists = \App\Models\Thread::where('forum_id', $this->forum_id)
                                               ->where('title', $value)
                                               ->exists();
                    if ($exists) {
                        $fail('A thread with this title already exists in this forum.');
                    }
                },
            ],
            'content' => 'required|string|min:10|max:10000',
            'tags' => 'nullable|array|max:5',
            'tags.*' => 'string|max:20',
        ];
    }

    /**
     * Get custom error messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'forum_id.required' => 'Please select a forum for your thread.',
            'forum_id.exists' => 'The selected forum does not exist.',
            'title.required' => 'Please enter a title for your thread.',
            'title.min' => 'The title must be at least 5 characters long.',
            'title.max' => 'The title may not be greater than 255 characters.',
            'content.required' => 'Please enter content for your thread.',
            'content.min' => 'The content must be at least 10 characters long.',
            'content.max' => 'The content may not be greater than 10,000 characters.',
            'tags.max' => 'You may not add more than 5 tags.',
            'tags.*.max' => 'Each tag may not be greater than 20 characters.',
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
            'forum_id' => 'forum',
            'title' => 'thread title',
            'content' => 'thread content',
        ];
    }
}