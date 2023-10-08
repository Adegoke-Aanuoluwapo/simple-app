<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Admin extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'rquired|email|users',
            'name' => 'rquired|string|max:50',
            'password' => 'rquired|confirmed|max:6',

        ];
    }
    public function message()
    {
        return [
            'email.required' => 'Email is required',
            'name.required' => 'Name is required',
            'password.required' => 'Password is required'
        ];
    }
}
