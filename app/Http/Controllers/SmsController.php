<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    //
    public function index()
    {
     
    Nexmo::message()->send([
       'to' => '2349037193017',
       'from' => 'sender',
       'text' => 'Test SMS'     
    ]);
       echo "Message Sent";
    }
}
