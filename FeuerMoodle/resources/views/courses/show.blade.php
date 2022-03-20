@extends('courses.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Kurzus megjelenítése</h2>
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
                <strong>Code:</strong>
                <input type="text" disabled value="{{$course['code']}}" name="code" class="form-control" placeholder="Course code">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" disabled value="{{$course['name']}}" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Caregory Id:</strong>
                <input type="number" disabled name="categoryId" value="{{$course['category_id']}}" class="form-control" placeholder="Category Id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Owner Id:</strong>
                <input type="number " disabled value="{{$course['owner_id']}}" name="ownerId" class="form-control" placeholder="Owner Id">
            </div>
        </div>
        
    </div>

@endsection