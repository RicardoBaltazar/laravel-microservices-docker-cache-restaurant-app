<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Response;

class CreateUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:4',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'name is required',
            'email.required' => 'email is required',
            'email.unique:users,email' => 'email is unique',
            'password.required' => 'password is required',
            'password.min' => 'password must be at least :min characters long',
        ];
    }

    protected function withValidator(Validator $validator)
    {
        if ($validator->fails()) {
            throw new HttpResponseException(response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY));
        }
    }
}
