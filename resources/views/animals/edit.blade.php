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
                <h1>Editar de Animal</h1>
            </div>
            <div class="card-body"> 
                <form action="{{ route('animals.update', ['animal' => $animal->id]) }}" method="post">
                    <input type="hidden" name="_method" value="put">
                    @include('animals._partial.form')
                </form>
            </div>
        </div>
    </div>
@endsection