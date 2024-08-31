<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Email;

class OrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_id',
    ];

    public function email(): BelongsTo
    {
        return $this->belongsTo(Email::class);
    }
}
