<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mail_address' => 'required|email|unique:users,mail_address|max:100',
            'password' => 'required|string|max:255',
            'password_confirmation' => 'required|same:password',
            'name' => 'required|string|max:255',
            'address' => 'nullable|max:255',
            'phone' => 'digits_between:0,15',
        ];
    }
}
