<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HazardController extends Controller
{
    function hazard(){
        return view('User.hazard');
    }
}
