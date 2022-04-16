@extends('layouts.layout')
@section('title'){{$user->username}} Módosítás @endsection 
@section('content')
    <div class="container p-3">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Felhasználó Módosítása</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('users.index') }}"> Vissza </a>
                </div>
            </div>
        </div>
       
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Hiba!</strong> Hibás bemeneti adatok!<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
      
        <form action="{{ route('users.update',$user->user_id) }}" method="POST">
            @csrf
            @method('PUT')
       
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Felhasználónév:</strong>
                        <input type="text" value="{{$user['username']}}" name="username" class="form-control" placeholder="Felhasználónév">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jelszó:</strong>
                        <input type="password" name="password" class="form-control" placeholder="Jelszó">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Szerepkör:</strong>
                        <select name="roleId" class="form-control">
                            @foreach ($roles as $role)
                                <option value="{{$role->role_id}}">{{$role->role_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Módosítás</button>
                </div>
            </div>
        </form>
    </div>
@endsection
