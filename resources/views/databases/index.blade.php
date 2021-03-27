@extends('databases.layout')

@section('content')
<br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Databases: </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('databases.create') }}"> Novo Database</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Descrição</th>
            <th width="280px">Ação</th>
        </tr>

	    @foreach ($databases as $database)
	    <tr>
	        <td>{{ $database->nome }}</td>
	        <td>{{ $database->tipo }}</td>
            <td>{{ $database->descricao }}</td>
	        <td>
                <form action="{{ route('databases.destroy',$database->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('databases.show',$database->id) }}">Ver</a>
                    <a class="btn btn-primary" href="{{ route('databases.edit',$database->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
	        </td>
	    </tr>
	    @endforeach

    </table>

@endsection