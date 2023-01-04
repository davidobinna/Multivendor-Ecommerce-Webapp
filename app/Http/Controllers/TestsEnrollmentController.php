<?php

namespace App\Http\Controllers;

use App\Notifications\TestEnrollment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class TestsEnrollmentController extends Controller
{
    //
    public function sendTestNotification()
    {
        $user = User::first();

        $enrollmentData = [
            'body' => 'you recieved a new test notification',
            'enrollmentText' => 'you are allowed to enroll',
            'url' => url('/'),
            'thankyou' => 'you have 14 days to enroll'
        ];

           //$user->notify(new TestEnrollment($enrollmentData));
           Notification::send($user,new TestEnrollMent($enrollmentData));
    }
    
}
