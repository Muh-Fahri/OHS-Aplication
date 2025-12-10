<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DelegationController extends Controller
{
    function delegation(){
        return view('User.delegation');
    }
}
