<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;

class AdminController extends Controller
{
    public function dashboard(){
    	return view ('admin.index');
    }

    public function employee(){
        $data_profil = Profil::all();
    	return view ('admin.employee',compact('data_profil'));
    }

    public function message(){
    	return view ('admin.message');
    }

    public function gallery(){
    	return view ('admin.gallery');
    }

    public function document(){
    	return view ('admin.document');
    }
}
