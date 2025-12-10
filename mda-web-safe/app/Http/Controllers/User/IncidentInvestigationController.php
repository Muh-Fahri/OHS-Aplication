<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IncidentInvestigationController extends Controller
{
    function incidentInvestigation(){
        return view('User.incident_investigation');
    }
}
