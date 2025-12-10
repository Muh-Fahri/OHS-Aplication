<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CorrectiveActionController extends Controller
{
    function correctiveAction(){
        return view('User.corrective_action');
    }
}
