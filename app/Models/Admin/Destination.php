<?php

namespace App\Models\Admin;

use App\Models\Admin\Package;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Destination extends Model
{
    use HasFactory;

    protected $table = 'destinations';

    protected $fillable = [
        'destination',
        'description',
        'image',
    ];


    public function packages(){
        return $this->hasMany(Package::class,'destination_id','id');
    }

}
