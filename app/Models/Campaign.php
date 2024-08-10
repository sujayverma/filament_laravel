<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'client_id',
        'agency',
        'brand',
        'description',
        'status'
    ];


    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

    public function videos()
    {
        return $this->hasMany('App\Models\Video');
    }
}
