<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $guarded= [];
    
    protected $fillable = [
        'type', 'car_company', 'car_no', 'price', 'remark'
    ];

    //relations

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'car_id');
    }
}
