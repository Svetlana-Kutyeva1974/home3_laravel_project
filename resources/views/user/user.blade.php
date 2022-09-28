
    <div style="width: 1000px; margin: 10px auto 0; border: 2px solid;">
        {{--СПИСОК ЮЗЕРОВ:
       @foreach($user as $userItem)
            <div>Привет, {{$userItem->name}}</div><br>
            <div> Ваш ID : {{$userItem->id}}<div><br>
                    <div>Email: {{$userItem->email}}</div><br>
                    <hr style="color: #333; border: 1px solid;"><br>
        @endforeach
--}}
          <div>Привет, {{$user['name']}}</div><br>
                    <div> Ваш ID : {{$user['id']}}</div><br>
                            <div>Email: {{$user['email']}}</div><br>
                            <hr style="color: #333; border: 1px solid;"><br>
</div>

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
