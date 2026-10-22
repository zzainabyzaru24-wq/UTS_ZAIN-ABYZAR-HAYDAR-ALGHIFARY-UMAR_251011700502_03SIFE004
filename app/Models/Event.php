<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'name',
        'organizer',
        'location',
        'date',
        'time',
        'ticket_price',
        'description',
        'banner',
    ];
}
