<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(){
    	return view('site.index');
    }

    public function about(){
    	return view('site.about');
    }

    public function service(){
    	return view('site.service');
    }

     public function contact(){
    	return view('site.contact');
    }

     public function config(){
        return view('admin.configuration.config');
    }
}
