<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    public function rdv(){
    	return view('site.rendezvous');
    }

     public function RendezVous(){
    	return view('admin.rendezvous.listRendezvous');
    }
}
