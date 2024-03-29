<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'first_name', 
        'last_name', 
        'email', 
        'phone_number', 
        'hire_date', 
        'address', 
        'city', 
        'postal_code', 
        'country',
    ];
}
