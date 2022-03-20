@extends('courses.layout')
 
@section('content')
    
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kurzusok listázása</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('courses.create') }}"> Új kurzus hozzáadása</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Sorszám</th>
            <th>ID</th>
            <th>Code</th>
            <th>Name</th>
            <th>CategoryID</th>
            <th>OwnerId</th>
            <th>Method</th>
        </tr>
        @foreach ($courses as $course)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $course->course_id }}</td>
            <td>{{ $course->code }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->category_id }}</td>
            <td>{{ $course->owner_id }}</td>
            <td>
                <a onclick="return confirm('Biztosan törli a kurzust?')"
                href={{"/courses/delete/".$course->course_id}}>
                <button class="btn btn-danger">Delete</button></a>

                <a href={{"/courses/modify/".$course->course_id}}>
                <button class="btn btn-danger">Modify</button></a>

            </td>
            
        </tr>
        @endforeach
    </table>
</div>
    
@endsection