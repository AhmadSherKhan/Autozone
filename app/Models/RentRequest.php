<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentRequest extends Model
{
    use HasFactory;

    protected $table = 'rent_requests';

    protected $fillable = [
        'pickp_date',
        'dropoff-date',
        'name',
        'CNIC',
        'Contact',
        'Email',
        'Address',
    ];
}
