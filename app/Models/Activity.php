<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'type',
        'user_id',
        'datetime',
        'paid',
        'notes',
        'satisfaction',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
