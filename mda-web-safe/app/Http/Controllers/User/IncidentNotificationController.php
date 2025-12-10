<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncidentNotificationController extends Controller
{
    function IncidentNotification(){
        return view('User.incident_notification');
    }
}
