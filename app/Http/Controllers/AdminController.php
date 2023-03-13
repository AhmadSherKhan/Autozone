<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\RentRequest;
use App\Models\ServiceList;

class AdminController extends Controller
{
    public function dash(){
        return view('admin.dashboard');
    }
    public function servicerequest(){
        $servreqs = ServiceRequest::all();
        return view ('admin.servicerequest' , ['servreqs'=>$servreqs]);
    }
    public function rentrequest(){
        $rentreqs = RentRequest::all();
        return view ('admin.rentrequest' , ['rentreqs'=>$rentreqs]);
    }   
    
}
