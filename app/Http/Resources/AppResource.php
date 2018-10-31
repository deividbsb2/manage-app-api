<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppResource extends JsonResource
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
            'bundle_id' => $this->bundle_id,
            'total_people' => $this->people()->count(),
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at
          ];
        return parent::toArray($request);
    }
}
