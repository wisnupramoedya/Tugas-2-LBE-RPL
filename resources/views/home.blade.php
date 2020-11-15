@extends('layouts.app')

@section('content')
<div class="container">
    @if(session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Hello User
                    <br>
                    <a href="/admin">Go to Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
