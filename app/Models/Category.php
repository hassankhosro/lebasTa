<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
    public function children()
    {
        return $this->hasMany('App\Models\Category', 'parent_id', 'id');
    }
    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'parent_id');
    }
    public function advertisements()
    {
        return $this->hasMany('App\Models\Advertisement');
    }
}
