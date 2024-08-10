<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_no',
        'address',
        'status'
    ];

    public function campaigns()
    {
        return $this->hasMany('App\Models\Campaign');
    }
}
