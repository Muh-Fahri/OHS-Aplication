<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetManagementConroller extends Controller
{
    function assetManagement() {
        return view('User.asset_management');
    }
}
