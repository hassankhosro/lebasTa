<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Gallery extends Model
{
    use HasFactory,SoftDeletes, CascadeSoftDeletes;

    protected $guarded = ['id'];
    protected $casts = [
       'filename' => 'array',
   ];
   protected $dates = ['deleted_at'];

    public function advertisement()
    {
        return $this->belongsTo('App\Models\Advertisement');
    }
}
