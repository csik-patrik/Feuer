@extends('layouts.layout')
@section('title')Felhasználó Hozzáadás @endsection
@section('content')
    <div class="container p-3">
        <table class="table  table-striped">
            <thead class="thead-dark">
                <tr class="row">
                    <th class="col-lg-11 margin-tb" scope="col">Felhasználó hozzáadása:</th>
                    <th class="col-lg-1 margin-tb p-1" scope="col">
                        <a class="btn btn-primary" href="{{ route('users.index') }}"> Vissza</a>
                    </th>
                </tr>
            </thead>
            <tbody>
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
                <form action="{{ route('users.store') }}" method="POST">
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Felhasználónév:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="username" class="form-control" placeholder="Felhasználónév">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Vezetéknév:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="lastname" class="form-control" placeholder="Vezetéknév">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Keresztnév:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="firstname" class="form-control" placeholder="Keresztnév">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Középső név:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="midname" class="form-control" placeholder="Középső név">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Jelszó:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            <input type="password" name="password" class="form-control" placeholder="Jelszó">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Szerepkör:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12" >
                            <select name="role_id" class="form-control">
                                @foreach ($roles as $role)
                                    <option value="{{$role->role_id}}">{{$role->role_name}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">E-mail cím:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="email" class="form-control">
                        </td>
                    </tr>
                    <tr class="row">
                        <th class="col-lg-6 col-md-6 col-sm-12" scope="row">Telefonszám:</th>
                        <td class="col-lg-6 col-md-6 col-sm-12">
                            <input type="text" name="phone" class="form-control">
                        </td>
                    </tr>
                    <tr class="row">
                        <td class="col-lg-12 col-md-12 col-sm-12 text-center" scope="row">
                            <button type="submit" class="btn text-center btn-primary">Hozzáadás</button>
                        </td>
                        
                    </tr>
                </div>
            </tbody>
        </table>
    </div>
@endsection