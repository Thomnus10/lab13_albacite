{{-- <h1>Welcome, {{ auth()->user()->name }}!</h1>
<p>You are logged in as {{ auth()->user()->email }}</p>
 
 
<form method="POST" action="/logout">
    @csrf
    <button type="submit">Logout</button>
</form> --}}

@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <h1>Welcome, {{ Auth::user()->name }}!</h1>
                <p>You are logged in as {{ Auth::user()->email }}</p>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection