<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class HandsetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'brand_name' => $this->brand->name,
            'price' => $this->price,
            'release_date' => Carbon::parse($this->release_date)->format('d-m-Y'),
            'features' => $this->features,
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
    }
}
