<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EvalueeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->full_name,
            'office' => $this->office,
            'position' => $this->position,
            $this->mergeWhen($this->rank === 'Faculty', [
                'teaching_department' => $this->teaching_department,
            ]),
        ];
    }
}
