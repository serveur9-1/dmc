<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
     public function admin(){
    	return view('admin.Accueil');
    }
     public function formation(){
    	return view('admin.formation.NosFormations');
    }

     public function AddFormation(){
    	return view('admin.formation.AddFormation');
    }
}
