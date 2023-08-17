<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PacijentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Ime' => $this->resource->Ime,
            'Prezime' => $this->resource->Prezime,
            'Godine' => $this->resource->Godine,
            'HronicneBolesti' => $this->resource->HronicneBolesti
        ];
    }
}