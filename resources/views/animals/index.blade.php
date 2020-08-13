@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Listagem de Animais
                    <a href="{{ route('animals.create') }}" style="float: right">
                        <button class="btn btn-primary">Cadastrar</button>
                    </a>
                </h1>
            </div>
            <div class="card-body">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Tipo Animal</th>
                            <th>Raça</th>
                            <th>Dono</th>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($animals as $animal)
                            <tr>
                                <td>{{ $animal->code }}</td>
                                <td>{{ $animal->name }}</td>
                                <td>{{ $animal->animalType->description }}</td>
                                <td>{{ $animal->breed }}</td>
                                <td>{{ $animal->customer->name }}</td>
                                <td><a href="{{ route('animals.edit', ['animal' => $animal->id]) }}" class="btn btn-primary">Editar</a></td>
                                <td>
                                    <form action="{{ route('animals.destroy', ['animal' => $animal->id]) }}" method="post">
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

            {{ $animals->links() }}
        </div>
    </div>
@endsection
