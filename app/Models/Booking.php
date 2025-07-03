<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_number',
        'checkin',
        'checkout',
        'special_request',
        'guest_name',
        'guest_email',
        'guest_phone',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_number', 'room_number');
    }
}

