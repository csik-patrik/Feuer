@extends('courses.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Kurzus részletei</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('courses.index') }}"> Vissza</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                <input type="number" disabled value="{{$course['course_id']}}" name="id" class="form-control" placeholder="Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kód:</strong>
                <input type="text" disabled value="{{$course['code']}}" name="code" class="form-control" placeholder="Kurzus kód">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Név:</strong>
                <input type="text" disabled value="{{$course['name']}}" name="name" class="form-control" placeholder="Név">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kategória Id:</strong>
                <input type="number" disabled name="categoryId" value="{{$course['category_id']}}" class="form-control" placeholder="Kategória Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tulajdonos Id:</strong>
                <input type="number " disabled value="{{$course['owner_id']}}" name="ownerId" class="form-control" placeholder="Tulajdonos Id">
            </div>
        </div>
        
    </div>

@endsection