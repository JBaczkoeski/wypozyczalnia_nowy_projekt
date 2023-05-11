<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable=['mark','model','year_of_production','price','fuel_type','transmission_type','power','number_of_seat','number_of_door','image'];
}
