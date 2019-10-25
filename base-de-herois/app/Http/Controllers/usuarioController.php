<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class usuarioController extends Controller
{
    public function getUsuarios(Request $req){
        
        $req->validate{[
            'nome' => 'nullable|alpha|min:3|max:255'
        ]};

        $qb = DB::table('users')->select(['name', 'id', 'email']);
        if($req->nome){
            $qb->where('name', 'like', "$req->nome%");
        }
        $usuarios = $qb->get();
        return view('usuarios', ['usu' => $usuarios]);
    }

    public function getUsuarios2(Request $req){
        
        $req->validate{[
            'nome' => 'nullable|alpha|min:3|max:255'
        ]};

        $qb = User::select(['name', 'id', 'email']);
        if($req->nome){
            $qb->where('name', 'like', "$req->nome%");
        }
        $usuarios = $qb->get();
        
        return view('usuarios', ['usu' => $usuarios]);
    }

    
}
