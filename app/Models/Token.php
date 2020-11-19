<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'access_token',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
