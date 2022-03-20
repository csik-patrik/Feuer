@extends('users.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Felhasználók listázása</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Új felhasználó hozzáadása</a>
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
            <th>Felhasználónév</th>
            <th>Jelszó</th>
            <th>Jogosultság ID</th>
            <th>Metódusok</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->user_id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->password }}</td>
            <td>{{ $user->role_id }}</td>
            <td>
                <form action="{{ route('users.destroy',$user->user_id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('users.show',$user->user_id) }}">Mutatás</a>
    
                    <a class="btn btn-primary" href="{{ route('users.edit',$user->user_id) }}">Módosítás</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Törlés</button>
                </form>
            </td>
            
        </tr>
        @endforeach
    </table>
  
    
      
@endsection