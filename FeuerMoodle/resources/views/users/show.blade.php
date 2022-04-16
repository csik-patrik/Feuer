@extends('layouts.layout')
@section('title') {{$user['username']}} @endsection
@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Felhasználó részeleti:</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Vissza</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Felhasználónév:</strong>
                    <input type="text" disabled value="{{$user['username']}}" name="username" class="form-control" placeholder="Felhasználónév">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Szerepkör:</strong>
                    <input type="number" disabled name="roleId" class="form-control" placeholder="{{$user->role->role_name}}">
                </div>
            </div>
        </div>
    </div>
@endsection