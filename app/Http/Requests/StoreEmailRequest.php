<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Traits\RequestHandlerTrait;
use Illuminate\Validation\Rule;

class StoreEmailRequest extends FormRequest
{
    use RequestHandlerTrait;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => ['required', 'max:100', 'unique:emails'],
        ];
    }

    public function messages(): array
    {
        return [
            'email.unique' => 'Ez az email cím már létezik a rendszerben!',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $this->failedValidationHelper($validator);
    }
}
