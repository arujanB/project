<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function postStatus(Request $request){
    	$this->validate($request, [
    		'status' -> required|max:1000;
    	]);
    }
}
