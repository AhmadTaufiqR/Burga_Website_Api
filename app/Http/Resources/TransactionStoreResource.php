<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TransactionStoreResource extends JsonResource
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
            'Tanggal' => $this->formatcreateatjam(),
            'withdraw' => $this->withdraw,
        ];
    }
    public function formatcreateatjam()
    {
        return Carbon::parse($this->created_at)->format('Y-m-d');
    }
}
