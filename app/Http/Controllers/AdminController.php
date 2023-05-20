<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function admin()
    {
        return view('backend.index');

        //make sure to remove this
        return view('backend.index');
    }
}
