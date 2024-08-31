<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\OrderDetail;

class Email extends Model
{
    use HasFactory;

    protected $fillable = [
        'channel_id',
        'video_ids',
        'email_subject',
        'email_message',
        'attach_type',
        'status',
        'error_detail',
        'sending_date_time',
        'delivered_date_time',
        'created_at',
        'updated_at'
    ];

    public function order(): HasOne
    {
        return $this->hasOne(OrderDetail::class);
    }
}
