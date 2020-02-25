<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response;
use App\User;

use Auth;

class UsuarioController extends Controller
{

    public function mostrarForm(){
        return view('pages.usuario');
    }
    public function verificarLogin(Request $request){
        $user = new User();

        
        $user->name = request('login');
        $user->password = request('senha');

       
        if(Auth::attempt(['name' => $user->name, 'password' => $user->password])){
            session(['logado' => true]);
            cookie('login', $user->name, time()+60*60*24);
            return;
            
        }else{
            $msg = array(
                'status' => 'error',
                'messagem' => 'Failed to Log in'
            );
            return response()->json($msg);
        }
        
            
        
    }
    public function logout(){
        Auth::logout();
        return redirect()->to('/login'); 
    }
}
