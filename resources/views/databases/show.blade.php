@extends('databases.layout')

@section('content')
<br>
<div class="card">
    <div class="card-header">
        <h2> Ver cadastro do Database:</h2>        
    </div>
    <br>    
    <div class="col">
        <div class="form-group">
            <strong>&nbsp;&nbsp;&nbsp;Nome:</strong>
            {{ $database->nome }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <strong>&nbsp;&nbsp;&nbsp;Tipo:</strong>
            {{ $database->tipo }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <strong>&nbsp;&nbsp;&nbsp;Descrição:</strong>
            {{ $database->descricao }}
        </div>
    </div>
    <hr>
    <div class="col-sm">
    &nbsp;&nbsp;<a class="btn btn-primary" href="{{ route('databases.index') }}"> Voltar</a>
    </div><br>
    
      
</div>    
              
                   
          

@endsection