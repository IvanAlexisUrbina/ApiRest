<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{   
    //no es necesario pero es buena practica para saber de dodne refiere
    public $collects =PostResource::class;
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data'=>$this->collection,
            'meta' => [
                'organization'=>'Erictel',
                'authors'=>[
                    'Ivan Alexis',
                    'Erictel'
                ],
                'type'=>'articles'
            ]
        ];
    }
}
