<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'email_id',
        'channel_name',
        'title',
        'client_name',
        'brand_name',
        'duration',
        'language',
        'tvc_id',
        'agency'
    ];

    public function email()
    {
        return $this->belongsTo('App\Models\Email');
    }
}
