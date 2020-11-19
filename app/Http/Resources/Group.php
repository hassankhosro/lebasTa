<?php

namespace App\Http\Resources;

use App\Models\Group as GroupModel;
use Illuminate\Http\Resources\Json\JsonResource;

class Group extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return GroupModel::all();
    }
}
