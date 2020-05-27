<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function OneService(){
    	return view('site.OneService');
    }

     public function SingleService(){
    	return view('site.SingleService');
    }

     public function NosServices(){
    	return view('admin.service.NosServices');
    }

     public function AddService(){
    	return view('admin.service.AddService');
    }
}
