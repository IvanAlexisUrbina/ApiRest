<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'id'=>$this->id,
            'post_name'=>$this->title,
            'slug'=>$this->slug,
            'content'=>$this->content,
            'autor'=>[
                'name'=>$this->user->name,
                'email'=>$this->user->email,
            ],
            'create_at'=>$this->published_at
        ];
    }
}
