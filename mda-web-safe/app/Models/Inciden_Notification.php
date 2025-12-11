<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inciden_Notification extends Model
{
    protected $fillable = [
        'report_date',
        'event_title',
        'date_time',
        'location',
        'status',
        'reporter',
        'remarks',
        'next_action',
        'next_user',
    ];
}
