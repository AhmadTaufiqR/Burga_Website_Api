<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
            'user' => $this->user->name,
            'kasir' => $this->kasir->name,
            'id_store' => $this->id_store,
            'id_transaction' => $this->id_transaction,
            'detail' => DetailTransactionResource::collection($this->detail),
            'date' => $this->date,
            'quantity' => $this->quantity,
            'total' => $this->total,
            'created_at' => $this->formatcreateatjam(),
            'update_at' => $this->formatupdateatjam(),
        ];
    }
    public function formatcreateatjam() {
        return Carbon::parse($this->created_at)->format('Y-m-d H:i:s');
    }
    public function formatupdateatjam() {
        return Carbon::parse($this->updated_at)->format('Y-m-d H:i:s');
    }
}
