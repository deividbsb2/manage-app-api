<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PersonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'birthday' => $this->birthday,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'profile' => $this->profile,
            'profile_id' => $this->profile_id,
            'apps' => AppResource::collection($this->apps),
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at
          ];
        return parent::toArray($request);
    }
}
