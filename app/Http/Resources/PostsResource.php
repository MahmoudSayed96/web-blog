<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class PostsResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // Return all attribuits in database recored
        //return parent::toArray($request);
        // return custome fileds
        return[
            "id"            => $this->id,
            "title"         => $this->title,
            "body"          => $this->body,
            "cover_image"   => $this->cover_image
        ];
    }
}
