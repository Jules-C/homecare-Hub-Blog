<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return CommentsResource::collection(Comments::all());
        return [
            'id' => $this->id,
            'updated_at' => $this->updated_at,
            'post_id' => $this->post_id,
            'text' => $this->text,
        ];
    }
}
