@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h1>Cadastro de Tipos de Animais</h1>
            </div>
            <div class="card-body"> 
                <form action="{{ route('animalTypes.store') }}" method="post">
                    @include('animalTypes._partial.form')
                </form>
            </div>
        </div>
    </div>
@endsection