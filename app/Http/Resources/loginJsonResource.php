<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class loginJsonResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'level' => $this->level,
            'balance' => $this->balance,
            'address' => $this->address,
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
