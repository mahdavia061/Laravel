<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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

        $rules =[
            'full_name' => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6|max:12',

        ];

        if(request()->route('user_id')&&intval(request()->route('user_id'))>0)
        {
            unset($rules['password']);
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'full_name.required' => 'Please enter your fullname.',
            'email.required' => 'Email is required.',
            'email.email' => 'The email entered is not valid.',
            'password.required' => 'Password is required.',
            'password.min' => 'The password must be at least 6 characters long.',
            'password.max' => 'The password must be at most 12 characters.',
        ];
    }
}
