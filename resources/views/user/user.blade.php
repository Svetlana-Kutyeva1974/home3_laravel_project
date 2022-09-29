<!DOCTYPE html>
<html lang="en">

<body>
  <div style="width: 1000px; margin: 10px auto 0; border: 2px solid;">
  <div>Привет, {{$user['name']}}</div><br>
      <div> Ваш ID : {{$user->id}}</div><br>
      <div>Email: {{$user->email}}</div><br>
      {{--<hr style="color: #333; border: 1px solid;width: 50%;"><br>--}}
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
</html>
