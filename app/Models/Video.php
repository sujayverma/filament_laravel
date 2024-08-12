<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'campaign_id',
        'name',
        'length',
        'frames',
        'size',
        'language',
        // 'deadline',
        'beta_no',
        'caption',
        'download_url',
        // 'download_channels',
        // 'downloadable',
        'status'
    ];

    public function campaign()
    {
        return $this->belongsTo('App\Models\Campaign');
    }
}
