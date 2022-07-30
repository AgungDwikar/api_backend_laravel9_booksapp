<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        //recourse ini kita bisa pulasikan datbase, jadi field mana saja yang kita mau tampilkan
        //nah untuk this ini mengacu nama field di database
        return [
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "proce" => $this->proce,
            "image" => $this->image,
            "createdAt" => $this->created_at,
            "updatedAt" => $this->updated_at
        ];
    }
}