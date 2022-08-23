<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index(){
        Nexmo::message()->send([
            'to' => '60107677090',
            'from' => 'sender',
            'text' => 'Your RM10 deposit has been returned to you.'
        ]);

        echo "Message sent!";
    }
}
