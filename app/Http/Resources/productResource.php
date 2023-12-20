<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class productResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'id_store' => $this->id_store,
            'code_barcode' => $this->code_barcode,
            'name_product' => $this->name_product,
            'price_product' => $this->price_product,
            'desc_product' => $this->desc_product,
            'stok' => $this->stok,
            'image' => $this->image,
            'created_at' => $this->formatcreateatjam(),
            'update_at' => $this->formatupdateatjam(),
        ];
    }

    public function formatcreateatjam()
    {
        return Carbon::parse($this->created_at)->format('Y-m-d H:i:s');
    }
    public function formatupdateatjam()
    {
        return Carbon::parse($this->update_at)->format('Y-m-d H:i:s');
    }
}
