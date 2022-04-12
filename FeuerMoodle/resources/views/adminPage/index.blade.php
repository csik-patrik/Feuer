@extends('layouts.layout')
@section('title') Adminisztráció @endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb text-center p-2">
                <div class="">
                    <h2>Adminisztráció</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 margin-tb">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top mt-3" height="150" src="{{ url('..\images\user.svg') }}" alt="Felhasználók">
                    <div class="card-body">
                      <h5 class="card-title">Felhasználók</h5>
                      <p class="card-text">Felhasználók menedzselése: Felhasználó megtekintése hozzáadása, módosítása, törlése.</p>
                      <a href="{{ url("/users") }}" class="btn btn-primary">Megnyitás</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 margin-tb">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" height="150" src="{{ url('..\images\course.svg') }}" alt="Kurzusok">
                    <div class="card-body">
                      <h5 class="card-title">Kurzusok</h5>
                      <p class="card-text">Kurzusok menedzselése: Kurzus megtekintése hozzáadása, módosítása, törlése.</p>
                      <a href="{{ url("/courses") }}" class="btn btn-primary">Megnyitás</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 margin-tb">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top mt-3" height="150" src="{{ url('..\images\course_category.svg') }}" alt="Kurzus kategórák">
                    <div class="card-body">
                      <h5 class="card-title">Kurzus kategóriák</h5>
                      <p class="card-text">Kurzusok kategóriák menedzselése: Kurzus kategóriák megtekintése hozzáadása, módosítása, törlése.</p>
                      <a href="#" class="btn btn-primary">Megnyitás</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 margin-tb">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" height="150" src="{{ url('..\images\course_members.svg') }}" alt="Kurzus kategórák">
                    <div class="card-body">
                      <h5 class="card-title">Kurzus tagok</h5>
                      <p class="card-text">Kurzusok tagok menedzselése: Kurzus tagok megtekintése hozzáadása, módosítása, törlése.</p>
                      <a href="#" class="btn btn-primary">Megnyitás</a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
@endsection