<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use App\Traits\RequestHandlerTrait;
use Illuminate\Validation\Rule;

class StoreTelephoneRequest extends FormRequest
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
        $nameId = $this->route('name');
        return [
            'telephone' => [
                'numeric',
                Rule::unique('telephones', 'telephone')->where(function ($query) use ($nameId) {
                    $query->where('name_id', $nameId->id);
                }),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'telephone.unique' => 'Ez a telefonszám már hozzá van adva a kiválasztott felhasználóhoz!',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        $this->failedValidationHelper($validator);
    }
}
