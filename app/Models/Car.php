<?php

namespace App\Models;

use App\Models\Traits\ModelHasPhoto;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory, ModelHasPhoto;
    protected $guarded= [];

    protected $fillable = [
        'type', 'car_company', 'car_no', 'price', 'remark', 'image'
    ];

    protected function photos(): array
    {
        return ['image'];
    }

    //relations

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'car_id');
    }
}
