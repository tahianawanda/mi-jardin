<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MijardinController extends Controller
{
    public function showDashboard (){
        return view ('dashboard/index');
    }
}
