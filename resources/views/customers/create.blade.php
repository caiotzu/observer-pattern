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
                <h1>Cadastro de Cliente</h1>
            </div>
            <div class="card-body"> 
                <form action="{{ route('customers.store') }}" method="post">
                    @include('customers._partial.form')
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('scripts/js/customers/custom.js') }}" defer></script>
@endsection