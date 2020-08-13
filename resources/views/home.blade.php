@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="text-align: center;">
                <div class="card-header" style="font-weight: bold; font-size: 20px;">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p style="font-size: 18px;">Seja bem vindo, {{ Auth::user()->name}}</p>
                    <div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
