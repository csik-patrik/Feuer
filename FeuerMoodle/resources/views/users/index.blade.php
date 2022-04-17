@extends('layouts.layout')
@section('title')Felhasználók @endsection
@section('content')
<div class="container p-3">
    <table class="table  table-striped">
        <thead class="thead-dark">
            <tr class="row">
                <th class="col-lg-9 margin-tb" scope="col">Felhasználók:</th>
                <th class="col-lg-3 margin-tb p-1" scope="col"><a class="btn btn-success" href="{{ route('users.create') }}"> Új felhasználó hozzáadása</a></th>
            </tr>
        </thead>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <tbody>
            <tr class="row">
                <th class="col-lg-4 col-md-4 col-sm-12 text-center" scope="row">Felhasználónév</th>
                <th class="col-lg-4 col-md-4 col-sm-12 text-center" scope="row">Szerepkör</th>
                <th class="col-lg-4 col-md-4 col-sm-12 text-center" scope="row">Művelet</th>
            </tr>
            @foreach ($users as $user)
            <tr class="row">
                <td class="col-lg-4 col-md-4 col-sm-12 text-center">{{$user->username}}</td>
                <td class="col-lg-4 col-md-4 col-sm-12 text-center" >{{$user->role->role_name}}</td>
                <td class="col-lg-4 col-md-4 col-sm-12 text-center">
                    <form action="{{ route('users.destroy',$user->user_id) }}" method="POST">
       
                        <a class="btn btn-info" href="{{ route('users.show',$user->user_id) }}">Részletek</a>
        
                        <a class="btn btn-primary" href="{{ route('users.edit',$user->user_id) }}">Módosítás</a>
       
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" onclick="return confirm('Biztosan törli a felhasználót?')" class="btn btn-danger">Törlés</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
  
    
      
@endsection