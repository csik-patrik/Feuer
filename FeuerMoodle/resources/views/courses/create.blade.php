@extends('courses.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Kurzus hozzáadása</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('courses.index') }}"> Vissza</a>
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
   
<form action="{{ route('courses.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kurzus kód:</strong>
                <input type="text" name="code" class="form-control" placeholder="Kurzus kód">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kurzus kód:</strong>
                <input type="text" name="name" class="form-control" placeholder="Név">
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Kategória:</strong>
                <select name="categoryId" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->category_id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
                <strong>Tulajdonos:</strong>
                <select name="ownerId" class="form-control">
                    @foreach ($owners as $owner)
                        <option value="{{$owner->user_id}}">{{$owner->username}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Hozzáadás</button>
        </div>
    </div>
   
</form>
@endsection