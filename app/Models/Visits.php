<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    protected $fillable = [
        'url_id',
        'visitor_ip',
        'visitor_location',
        'visitor_long',
        'visitor_lat',
        'visitor_device',
        'visitor_os',
        'previous_platform',
        'last_visit_time',
    ];

}
