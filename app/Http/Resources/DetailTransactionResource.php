<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class DetailTransactionResource extends JsonResource
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
            'id_transactions' => $this->id_kasir,
            'name_product' => $this->name_product,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price,
            'subtotal' => $this->subtotal,
            'created_at' => $this->formatcreateatjam(),
            'update_at' => $this->formatupdateatjam(),
        ];
    }
    public function formatcreateatjam() {
        return Carbon::parse($this->created_at)->format('Y-m-d H:i:s');
    }
    public function formatupdateatjam() {
        return Carbon::parse($this->update_at)->format('Y-m-d H:i:s');
    }
}
