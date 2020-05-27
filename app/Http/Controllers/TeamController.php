<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
     public function AddMembre(){
    	return view('admin.équipe.AddMembre');
    }

    public function NotreEquipe(){
    	return view('admin.équipe.NotreEquipe');
    }
}
