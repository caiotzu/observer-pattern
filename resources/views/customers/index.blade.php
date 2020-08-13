@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Listagem dos Clientes
                    <a href="{{ route('customers.create') }}" style="float: right">
                        <button class="btn btn-primary">Cadastrar</button>
                    </a>
                </h1>
            </div>
            <div class="card-body">  
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Endereço</th>
                            <th>Status</th>
                            <th>#</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id }}</td>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>{{ $customer->address }}, nº {{ $customer->number }} - {{ $customer->city }}/{{ $customer->state }}</td>
                                <td>{{ ($customer->status == 'A' ? 'Ativo' : 'Inativo')  }}</td>
                                <td><a href="{{ route('customers.edit', ['customer' => $customer->id]) }}" class="btn btn-primary">Editar</a></td>
                                <td>
                                    <form action="{{ route('customers.destroy', ['customer' => $customer->id]) }}" method="post">
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

            {{ $customers->links() }}
        </div>
    </div>
@endsection

