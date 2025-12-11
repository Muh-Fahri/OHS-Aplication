<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Inciden_Notification;
use Illuminate\Http\Request;

class IncidentNotificationController extends Controller
{
    function IncidentNotification(){
        $incident_notification = Inciden_Notification::all();
        return view('User.incident_notification',compact('incident_notification'));
    }



}
