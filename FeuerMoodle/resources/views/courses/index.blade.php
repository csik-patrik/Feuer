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
                <form action="{{ route('courses.destroy',$course->course_id) }}" method="POST">
   
                    
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                
            </td>
            
        </tr>
        @endforeach
    </table>
</div>
    
@endsection