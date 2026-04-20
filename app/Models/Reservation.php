<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'form_name',
        'email',
        'phone',
        'no_of_persons',
        'date',
        'time',
        'preferred_food',
        'occasion',
    ];
}
