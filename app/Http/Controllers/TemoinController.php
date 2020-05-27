<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemoinController extends Controller
{
    public function AddTemoignage(){
    	return view('admin.temoignage.AddTemoignage');
    }

    public function NosTemoignages(){
    	return view('admin.temoignage.NosTemoignages');
    }
}
