<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LicenseToOperateController extends Controller
{
    function licenseToOperate() {
        return view('User.license_to_operate');
    }
}
