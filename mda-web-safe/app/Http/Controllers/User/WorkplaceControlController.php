<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WorkplaceControlController extends Controller
{
    function workPlaceControl() {
        return view('User.work_place_control');
    }
}
