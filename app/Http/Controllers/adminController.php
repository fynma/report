<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function admin() {
        return view ('admin.index');
    }
}
