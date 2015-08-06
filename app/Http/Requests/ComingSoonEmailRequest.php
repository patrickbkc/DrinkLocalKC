<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ComingSoonEmailRequest extends Request
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
            'email' => 'required|email|unique:coming_soon_emails',
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => 'That email address is already signed up to be notified!',
            'email.required' => 'Please enter your email address!',
            'email.email' => 'Please enter a valid email address.',
        ];
    }
}
