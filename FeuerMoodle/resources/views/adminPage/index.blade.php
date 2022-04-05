@extends('adminPage.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb text-center p-2">
            <div class="">
                <h2>Adminisztráció</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 margin-tb">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="url(../images/logo.svg)" alt="Felhasználók">
                <div class="card-body">
                  <h5 class="card-title">Felhasználók</h5>
                  <p class="card-text">Felhasználók menedzselése: Felhasználó megtekintése hozzáadása, módosítása, törlése.</p>
                  <a href="{{ url("/courses") }}" class="btn btn-primary">Megnyitás</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 margin-tb">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Kurzusok">
                <div class="card-body">
                  <h5 class="card-title">Kurzusok</h5>
                  <p class="card-text">Kurzusok menedzselése: Kurzus megtekintése hozzáadása, módosítása, törlése.</p>
                  <a href="{{ url("/users") }}" class="btn btn-primary">Megnyitás</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 margin-tb">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Kurzus kategórák">
                <div class="card-body">
                  <h5 class="card-title">Kurzus kategóriák</h5>
                  <p class="card-text">Kurzusok kategóriák menedzselése: Kurzus kategóriák megtekintése hozzáadása, módosítása, törlése.</p>
                  <a href="#" class="btn btn-primary">Megnyitás</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 margin-tb">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Kurzus kategórák">
                <div class="card-body">
                  <h5 class="card-title">Kurzus tagok</h5>
                  <p class="card-text">Kurzusok tagok menedzselése: Kurzus tagok megtekintése hozzáadása, módosítása, törlése.</p>
                  <a href="#" class="btn btn-primary">Megnyitás</a>
                </div>
            </div>
        </div>
    </div>        
@endsection