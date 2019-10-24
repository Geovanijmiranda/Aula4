<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usuarioController extends Controller
{
    public function getUsuarios(){
        
        $usuarios = DB::table('users')->select('name', 'email as user_email')->get();
        //dd($usuarios);
        return view('usuarios', ['usu' => $usuarios]);
    }
}
