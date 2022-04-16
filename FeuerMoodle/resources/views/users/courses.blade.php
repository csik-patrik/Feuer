@extends('layouts.layout')
@section('title') Kurzusaim @endsection
@section('content')
<div class="container p-3">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Kurzusok listázása</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="#">Kurzushozzáférés igénylése</a>
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
            <th>Kurzus kód</th>
            <th>Kurzus név</th>
            <th>Kategória</th>
            <th>Művelet</th>
        </tr>
        @foreach (Auth::user()->courses as $course)
        <tr>
            <td>{{ $course->code }}</td>
            <td>{{ $course->name }}</td>
            <td>{{ $course->category->name }}</td>
            <td>
                <form action="{{ route('courseMembers.destroy',$course->course_id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Biztosan leadja a kurzust?')" class="btn btn-danger">Leadás</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>
</div>
@endsection