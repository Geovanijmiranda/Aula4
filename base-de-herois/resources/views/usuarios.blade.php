@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuarios</div>

                <div class="card-body">
                    <ol>
                    @foreach($usu as $Usuarios)    
                     <li>{{$Usuarios->name}}</li>
                     @endforeach 
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
