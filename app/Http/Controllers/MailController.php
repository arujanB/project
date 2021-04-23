<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send(){
    	$objDemo = new \stdClass();
    	$objDemo->demo_one = 'Demo One Value';
    	$objDemo->demo_two = 'Demo two value';
    	$objDemo->sender = 'Assel.Tolep';
    	$objDemo->receiver = 'Assel.Tolep';

    	Mail::to("190103372@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}
