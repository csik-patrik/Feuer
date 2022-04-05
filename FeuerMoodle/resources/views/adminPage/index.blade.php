@extends('adminPage.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb text-center p-2">
            <div class="">
                <h2>Adminisztráció</h2>
            </div>
        </div>
        <div class="col-lg-6 margin-tb">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Felhasználók kép">
                <div class="card-body">
                  <h5 class="card-title">Felhasználók</h5>
                  <p class="card-text">Felhasználók menedzselése: Felhasználó megtekintése hozzáadása, módosítása, törlése.</p>
                  <a href="#" class="btn btn-primary">Megnyitás</a>
                </div>
              </div>
        </div>
        <div class="col-lg-6 margin-tb">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Kurzusok kép">
                <div class="card-body">
                  <h5 class="card-title">Kurzusok</h5>
                  <p class="card-text">Kurzusok menedzselése: Kurzus megtekintése hozzáadása, módosítása, törlése.</p>
                  <a href="#" class="btn btn-primary">Megnyitás</a>
                </div>
              </div>
        </div>
    </div>
</div>
@endsection