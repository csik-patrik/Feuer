@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <div class="account-settings">
                <div class="user-profile">
                    <div class="user-avatar">
                        <img src="{{ url('..\images\userProfile.svg') }}">
                    </div>
                    <h5 class="user-name">{{ Auth::user()->username }}</h5>
                    <h6 class="user-email"></h6>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
    <div class="card h-100">
        <div class="card-body">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h6 class="mb-2 text-primary">Profil szerkesztése</h6>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="firstname">Keresztnév:</label>
                        <input type="text" class="form-control" id="firstname" placeholder="Új keresztnév">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="midname">Középsőnév:</label>
                        <input type="text" class="form-control" id="midname" placeholder="Új középsőnév">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="lastname">Vezetéknév:</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Új vezetéknév">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="eMail">Email</label>
                        <input type="email" class="form-control" id="eMail" placeholder="Új email">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="form-group">
                        <label for="phone">Telefonszám</label>
                        <input type="text" class="form-control" id="phone" placeholder="Új telefonszám">
                    </div>
                </div>
            </div>
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-right">
                        <a href="{{ url("/profile") }}" class="btn btn-primary">Vissza</a>
                        <button type="button" id="submit" name="submit" class="btn btn-primary">Módosít</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

@endsection