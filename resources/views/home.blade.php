@extends('layouts.app')

@section('content')

        <div class="container" style="text-align: center;" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   System Trainee 
                </div>

                <div class="links">
                    @if (Auth::check())
                        <a href="https://laravel.com/docs">Profile</a>
                        <a href="https://laracasts.com">Checkin-Checkout</a>
                        <a href="https://laravel-news.com">To do list</a>
                    @else
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    @endif
                </div>
            </div>
        </div> 

{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
             --}}


{{-- 
            <div class="panel panel-default">
                <div class="panel-heading"> User Dashboard</div>

                <div class="panel-body">
                      You are logged in as <strong>USER</strong>
                  
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection
