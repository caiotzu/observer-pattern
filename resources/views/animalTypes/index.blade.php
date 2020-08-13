@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Listagem dos Clientes
                    <a href="{{ route('animalTypes.create') }}" style="float: right">
                        <button class="btn btn-primary">Cadastrar</button>
                    </a>
                </h1>
            </div>
            <div class="card-body">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Descriçaõ</th>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($animalTypes as $animalType)
                            <tr>
                                <td>{{ $animalType->id }}</td>
                                <td>{{ $animalType->description }}</td>
                                <td><a href="{{ route('animalTypes.edit', ['animalType' => $animalType->id]) }}" class="btn btn-primary">Editar</a></td>
                                <td>
                                    <form action="{{ route('animalTypes.destroy', ['animalType' => $animalType->id]) }}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="delete">
                                        <button type="submit" class="btn btn-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    
                    </tbody>
                </table>
            </div>

            {{ $animalTypes->links() }}
        </div>
    </div>
@endsection
