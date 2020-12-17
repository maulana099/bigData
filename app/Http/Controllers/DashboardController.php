<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
    	return view ('user.index');
    }

    public function contact(){
    	return view ('user.contact');
    }

    public function about(){
    	return view ('user/about');
    }

    public function team(){
    	return view ('user.team');
    }

    public function visi_misi(){
        return view ('user.visi-misi');
    }
    
    public function konsultan(){
    	return view ('user.konsultan');
    }

    public function software(){
    	return view ('user.software');
    }

    public function website(){
    	return view ('user.website');
    }

    public function android(){
    	return view ('user.android');
    }

    public function gap(){
    	return view ('user.gap');
    }

    public function cmb(){
    	return view ('user.cmb');
    }
}
