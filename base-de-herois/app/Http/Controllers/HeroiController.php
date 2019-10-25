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
        $heroi->origem = $req->origem;
        $heroi->forca = $req->forca;
        $heroi->terrequeo = ($req->terrequeo && $req->terrequeo === 'on') ? true : false;
        $heroi->pode_voar = ($req->pode_voar && $req->pode_voar === 'on') ? true : false;
        $heroi->foto = $req->file('foto');
        $heroi->save();

        return redirect('/herois');

        
    }
}
