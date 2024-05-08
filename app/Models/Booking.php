<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'payment_id',
        'user_id',
        'package_id
        name',
        'email',
        'start',
        'end',
        'adult',
        'child',
        'amount',
        'status',
        'payment_method',
    ];
}
