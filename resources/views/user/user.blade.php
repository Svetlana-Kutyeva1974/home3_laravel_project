
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div style="width: 1000px; margin: 10px auto 0; border: 2px solid;">
        {{--СПИСОК ЮЗЕРОВ:
       @foreach($user as $userItem)
            <div>Привет, {{$userItem->name}}</div><br>
            <div> Ваш ID : {{$userItem->id}}<div><br>
                    <div>Email: {{$userItem->email}}</div><br>
                    <hr style="color: #333; border: 1px solid;"><br>
        @endforeach
--}}
          <div>Привет, {{$user->name}}</div><br>
                    <div> Ваш ID : {{$user->id}}</div><br>
                            <div>Email: {{$user->email}}</div><br>
                            <hr style="color: #333; border: 1px solid;"><br>
</div>
</body>
{{--
@extends('layouts.app')

@section('content')
            <div class="card-header">{{ __('Dashboard') }}</div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Ваш профиль<b>{{ $user['name']}}</b></div>

                    <div class="card-body">
                        ID: <b>{{ $user['$id'] }}</b>
                        <br />
                        email: <b>{{ $user['email'] }}</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
--}}
