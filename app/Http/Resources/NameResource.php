<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
class NameResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'picture_url' => $this->picture ? asset('storage/images/' . $this->picture) : null,
            'address' => $this->address,
            'mail_address' => $this->mail_address,
            'emails' => EmailResource::collection($this->whenLoaded('emails')),
            'telephones' => TelephoneResource::collection($this->whenLoaded('telephones')),
        ];
    }
}
