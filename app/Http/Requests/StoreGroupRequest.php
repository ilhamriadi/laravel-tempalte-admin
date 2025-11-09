<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreGroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check() && Auth::user()->can('create-groups');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:255',
                'unique:groups,name',
                'regex:/^[a-zA-Z0-9\s\-_]+$/',
            ],
            'description' => 'nullable|string|max:1000',
            'type' => 'required|in:public,private,secret',
            'avatar' => 'nullable|string|max:255',
            'rules' => 'nullable|string|max:2000',
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
            'name.required' => 'Please enter a group name.',
            'name.min' => 'Group name must be at least 3 characters long.',
            'name.max' => 'Group name may not be greater than 255 characters.',
            'name.unique' => 'A group with this name already exists.',
            'name.regex' => 'Group name may only contain letters, numbers, spaces, hyphens, and underscores.',
            'description.max' => 'Description may not be greater than 1,000 characters.',
            'type.required' => 'Please select a group type.',
            'type.in' => 'Group type must be public, private, or secret.',
            'avatar.max' => 'Avatar URL may not be greater than 255 characters.',
            'rules.max' => 'Group rules may not be greater than 2,000 characters.',
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
            'name' => 'group name',
            'description' => 'group description',
            'type' => 'group type',
            'avatar' => 'group avatar',
            'rules' => 'group rules',
        ];
    }
}