<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profil;
use Auth;
use Illuminate\Support\Facades\Input;

class AkunController extends Controller
{
	public function login(){
		return view ('admin.login');
	}

	public function add_employee(Request $request){
		$data_user = new User();
		$data_user->role_login = $request->role_login;
		$data_user->name = $request->name;
		$data_user->position = $request->position;
		$data_user->email = $request->email;
		$data_user->password = bcrypt('$data_user->password');
		$data_user->save();

		$request->request -> add (['id_user' => $data_user->id]);
		$data_profil = new Profil();
		$data_profil->id_user = $data_user->id;
		$data_profil->nama_lengkap = $data_user->name;
		$data_profil->position = $request->position;
		$data_profil->no_hp = $request->no_hp;
		$data_profil->salary = $request->salary;
		$data_profil->save();
		return redirect ('/employee');
	}


	public function post_login(Request $request){
		$data_profil = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);

		if (Auth::attempt($data_profil)){
			return redirect ('/bigdata/admin');
		}

		return "gagal";
	}

//         $email = $request->email;
//         $password = $request->password;

//         $data_user = User::where('email',$email)->first();
//         if($data_user){ //apakah email tersebut ada atau tidak
//             if(Hash::check($password,$data_user->password)){
//                 Session::put('name',$data_user->name);
//                 Session::put('email',$data_user->email);
//                 Session::put('login',TRUE);
//                 dd ($redirect->all());
//             }
//             else{
//                 return redirect('/login')->with('alert','Password atau Email, Salah !');
//             }
//         }
//         else{
//             return redirect('/login')->with('alert','Password atau Email, Salah!');
//         }

}	