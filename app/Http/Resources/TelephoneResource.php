<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TelephoneResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'telephone' => $this->telephone,
        ];
    }
}