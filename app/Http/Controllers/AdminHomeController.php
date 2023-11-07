<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function home(Request $request) {
        return view('admin.index');
    }
}
