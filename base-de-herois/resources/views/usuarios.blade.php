@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usuários</div>

                <div class="card-body">
                    <table class="table">
                      <thead>
                       <tr>
                         <th>id</th>
                         <th>nome</th>   
                         <th>email</th> 
                        </tr>
                      </thead>  
                
                      <tbody>
                        @foreach($usu as $Usuarios)    
                          <tr>
                            <td>{{$Usuarios->id}}</td>
                            <td>{{$Usuarios->name}}</td>
                            <td>{{$Usuarios->email}}</td>
                          </tr>  
                        @endforeach 
                     </tbody>

                    </table> 
                </div>
            </div> 
            </div>
        </div>
    </div>
</div>
@endsection
