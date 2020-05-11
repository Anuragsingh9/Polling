@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editor Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as Editor!
                    
                </div>
            </div>
            <h1>Welcome to Online Voting System</h1>

        </div>
    </div>
    <button class="btn btn-info"><a href="/candidate"> Poll Here</a></button>
    {{-- <button class="btn btn-info"><a href="/candidate">Vote Here</a></button> --}}
    
    
    {{-- <button><a href="/signup">Register Here</a></button>
    <button>Login Here</button> --}}



</div>
@endsection
