<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'destination_id',
        'location',
        'title',
        'days',
        'nights',
        'maxpeople',
        'about',
        'price',
        'discounted_price',
    ];

    public function packageItinerarys(){
        return $this->hasMany(Itinerary::class,'package_id','id');
    }

    public function packageImages(){
        return $this->hasMany(Image::class,'package_id','id');
    }

    public function bookingdates(){
        return $this->hasMany(BookingDate::class,'package_id','id');
    }

    public function destinations(){
        return $this->belongsTo(Destination::class,'destination_id','id');
    }
}
