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
                <h1>Editar de Tipo de Animal</h1>
            </div>
            <div class="card-body"> 
                <form action="{{ route('animalTypes.update', ['animalType' => $animalType->id]) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    @include('animalTypes._partial.form')
                </form>
            </div>
        </div>
    </div>
@endsection