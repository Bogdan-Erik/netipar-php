<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\Traits\RequestHandlerTrait;
use Illuminate\Validation\Rule;

class StoreNameRequest extends FormRequest
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
            'name' => ['required', 'max:50'],
            'picture' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'emails' => ['required', 'max:100'],
            'emails.*' => ['required', 'max:100', 'email', Rule::unique('emails', 'email'), 'distinct'],
            'address' => ['max:200'],
            'mail_address' => ['max:200'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $this->failedValidationHelper($validator);
    }

    public function messages(): array
    {
        return [
            'emails.required' => 'Legalább 1 email cím megadása kötelező!',
            'emails.*.required' => 'Legalább 1 email cím megadása kötelező!',
            'emails.*.distinct' => 'Ugyan az az email cím többször van hozzáadva!',
        ];
    }
}
