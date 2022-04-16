@extends('layouts.layout')
@section('title') {{$user['username']}} részletek @endsection
@section('content')
    <div class="container p-3">
        <table class="table  table-striped">
            <thead class="thead-dark">
                <tr class="row">
                    <th class="col-lg-11 margin-tb" scope="col">Felhasználó részeleti:</th>
                    <th class="col-lg-1 margin-tb" scope="col"><a class="btn btn-primary" href="{{ route('users.index') }}"> Vissza</a></th>
                    
                </tr>
            </thead>
            <tbody>
                <tr class="row">
                    <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Felhasználónév:</th>
                    <td class="col-lg-6 col-md-6 col-sm-12">{{$user->username}}</td>
                </tr>
                <tr class="row">
                    <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Teljes név:</th>
                    @if($user->userData->midname != null)
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            {{$user->userData->lastname}} {{$user->userData->midname}} 
                                {{$user->userData->firstname}}
                        </td>
                    @else
                    <td class="col-lg-6 col-md-6 col-sm-12">
                        {{$user->userData->lastname}} {{$user->userData->firstname}}
                    </td>
                    @endif
                </tr>
                <tr class="row">
                    <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Szerepkör:</th>
                    <td class="col-lg-6 col-md-6 col-sm-12" >{{$user->role->role_name}}</td>
                </tr>
                <tr class="row">
                    <th class="col-lg-6 col-md-6 col-sm-12" scope="row">E-mail cím:</th>
                    <td class="col-lg-6 col-md-6 col-sm-12">{{$user->userData->email}}</td>
                </tr>
                <tr class="row">
                    <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Telefonszám:</th>
                    <td class="col-lg-6 col-md-6 col-sm-12">{{$user->userData->phone}}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection