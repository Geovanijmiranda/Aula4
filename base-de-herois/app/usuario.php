<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;

class usuario extends Model
{
    public function getUsuarios(){
        
        $usuarios = DB::table('users')->select('name', 'email')->get();
        return view('usuarios', ['usu' => $usuarios]);
    }

}
