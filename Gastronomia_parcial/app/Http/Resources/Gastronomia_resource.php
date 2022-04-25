<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Gastronomia_resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
             'pais' => $this->pais,
              'nombre_comida' => $this->nombre_comida,
               'precio' => $this->precio,
                'tradicion' => $this->tradicion,
        ];
    }
}
