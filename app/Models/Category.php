<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;


class Category extends Model
{
    use HasFactory,SoftDeletes, CascadeSoftDeletes;
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['children', 'advertisements', 'features'];

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
    public function features()
    {
        return $this->hasMany('App\Models\Feature');
    }
}
