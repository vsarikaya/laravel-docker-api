<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Helpers\{
    ResponseCodes, ResponseResult
};

class UserLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check() == false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'     => 'required|email',
            'password'  => 'required|min:6',
        ];
    }

    /**
     * Failed api custom response
     *
     * @param Validator $validator
     * @return object
     */
    protected function failedValidation(Validator $validator)
    {
        return ResponseResult::generate(implode(", ",$validator->errors()->all()), ResponseCodes::HTTP_BAD_REQUEST, false);
    }
}
