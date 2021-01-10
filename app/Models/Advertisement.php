<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;


class Advertisement extends Model
{
    use HasFactory,Sluggable,SoftDeletes, CascadeSoftDeletes;

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];
    protected $cascadeDeletes = ['galleries'];


    public function meson()
    {
        return $this->belongsTo('App\Models\Meson');
    }
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'cat_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function features()
    {
     return $this->belongsToMany('App\Models\Feature')->withPivot('value');
   }
    public function galleries()
    {
     return $this->hasMany('App\Models\Gallery');
   }

}
