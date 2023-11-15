<?php

namespace App\Traits;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Session;

trait FileUploadTrait {
    protected function uploadImage($image, $folder = 'images')
    {
        $imageName = uniqid() . '_' . time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs($folder, $imageName, 'public');

        return $imageName;
    }
}
