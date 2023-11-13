<?php

namespace App\Traits;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Session;

trait RequestHandlerTrait {
    protected function failedValidationHelper(Validator $validator)
    {
        foreach ($validator->errors()->all() as $error) {
            Session::flash('message', $error);
        }

        return parent::failedValidation($validator);
    }
}
