@extends('layouts.layout')
@section('content')
    <div class="container p-3">
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
                <th>Kód</th>
                <th>Név</th>
                <th>Kategória</th>
                <th>Tulajdonos</th>
                <th>Művelet</th>
            </tr>
            @foreach ($courses as $course)
            <tr>
                <td>{{ $course->code }}</td>
                <td>{{ $course->name }}</td>
                <td>{{ $course->category->name }}</td>
                <td>{{ $course->user->username }}</td>
                <td>
                    <form action="{{ route('courses.destroy',$course->course_id) }}" method="POST">
                        @csrf
                        <a class="btn btn-info" href="{{ route('courses.show',$course->course_id) }}">Részletek</a>
                        <a class="btn btn-primary" href="{{ route('courses.edit',$course->course_id) }}">Szerkesztés</a>
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Biztosan törli a kurzust?')" class="btn btn-danger">Törlés</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection