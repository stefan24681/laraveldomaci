<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PregledResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'lekar_id' => $this->resource->lekar,
            'pacijent_id' => $this->resource->pacijent,
            'Anamneza' => $this->resource->Anamneza,
            'Terapija' => $this->resource->Terapija

        ];
    }
}