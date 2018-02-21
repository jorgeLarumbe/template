@extends('admin.layout')

@section('content')

@include('admin.partials.header-content')

    <div class="panel panel-default">
        <div class="panel-heading">. : : AdminLTE 2.4.3 : : .</div>
        <div class="panel-body">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-bottom: -20px;
            }

            .title {
            	margin-top: 30px;
                font-size: 64px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;                
            }

            .m-b-md {
                margin-bottom: 0px;
            }
        </style>

        <div class="content">
            <div class="title m-b-md">
                @auth

                    Welcome to Laravel

                @else

                    Laravel 5.5

                @endauth
            </div>

            <div class="links">
                <a href="https://laravel.com/docs">Documentation</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div>
        </div>
        </div>
    </div>

@endsection

