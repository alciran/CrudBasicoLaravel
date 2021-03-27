@extends('databases.layout')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Database</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('databases.index') }}"> Voltar</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Existe algum problema com a entrada de dados.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('databases.update',$database->id) }}" method="POST">
    	@csrf
        @method('PUT')
         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Nome:</strong>
		            <input type="text" name="nome" value="{{ $database->nome }}" class="form-control" placeholder="Nome...">
		        </div>
		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Tipo:</strong>
		            <input type="text" name="tipo" value="{{ $database->tipo }}" class="form-control" placeholder="Tipo...">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Descrição:</strong>
		            <textarea class="form-control" style="height:150px" name="descricao" placeholder="DEscrição...">{{ $database->descricao }}</textarea>
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		      <button type="submit" class="btn btn-primary">Salvar</button>
		    </div>
		</div>

    </form>

@endsection