@extends('users.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Kurzus részletei</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Vissza</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                <input type="number" disabled value="{{$user['user_id']}}" name="id" class="form-control" placeholder="Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Felhasználónév:</strong>
                <input type="text" disabled value="{{$user['username']}}" name="username" class="form-control" placeholder="Felhasználónév">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jelszó:</strong>
                <input type="text" disabled value="{{$user['password']}}" name="password" class="form-control" placeholder="Jeszló">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jogosultság Id:</strong>
                <input type="number" disabled value="{{$user['role_id']}}" name="roleId" class="form-control" placeholder="Jogosultság Id">
            </div>
        </div>
    </div>

@endsection