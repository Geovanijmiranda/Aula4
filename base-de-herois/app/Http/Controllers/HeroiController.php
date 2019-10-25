<?php

namespace App\Http\Controllers;

use App\Heroi;
use Illuminate\Http\Request;

class HeroiController extends Controller
{
    public function getListaController(){
        $qb = Heroi::select(['nome']);
        $heroi = $qb->get();
        return $heroi;



    }

    public function create(){

        return view('herois.create');
    }

    public function store(Request $req){

        $req->validate([
            'nome' => 'required|alpha',
            'foto' => 'file'

        ]);

        $heroi = new Heroi();
        $heroi->nome = $req->nome;
        $heroi->identidade_secreta = $req->identidade_secreta;
        $heroi->orgiem = $req->origem;
        $heroi->forca = $req->forca;
        $heroi->terraqueo = ($req->terraqueo && $req->terraqueo === 'on') ? true : false;
        $heroi->pode_voar = ($req->pode_voar && $req->pode_voar === 'on') ? true : false;
        
        $path = $req->file('foto')->getRealPath();
        $foto = file_get_contents($path);
        $base64 = base64_encode($foto);
        
        $heroi->foto = $base64;
        $heroi->save();

        return redirect('/herois');

        
    }
}
