<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDate extends Model
{
    use HasFactory;

    protected $table = 'booking_dates';

    protected $fillable = [
        'package_id',
        'start_date',
        'end_date',
    ];

    public function packages(){
        return $this->belongsTo(package::class,'package_id','id');
    }
}
