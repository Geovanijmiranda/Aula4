@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if($errors->any())
                @json($error->all());
            @endif
            <div class="card">
                <div class="card-header">NOVO HEROI</div>

                <div class="card-body">
                   <form action="{{ route("salva")}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <p>Nome:</p>
                      <input type="text" name="nome">
                      <p>Identidade secreta:</p>
                      <input type="text" name="identidade_secreta">
                      <p>Origem:</p>
                      <input type="text" name="origem">
                      <p>Força:</p>
                      <select name="forca" id="forca">
                          <option value="forte">Forte</option>
                          <option value="medio">Medio</option>
                          <option value="fraco">Fraco</option>
                      </select>
                      <p>Terraqueo?
                          <input type="checkbox" name="terraqueo">
                      </p>   
                      <p>Pode voar?
                          <input type="checkbox" name="pode_voar">
                      </p>   
                      <p>Foto:
                          <input type="file" name="foto">
                      </p>   
      
                    <input type="submit" value="Salvar">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
