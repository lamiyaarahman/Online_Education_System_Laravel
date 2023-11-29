@extends('layouts.appAdmin')
@section('content')
   <table class = "table table-border">
        <tr>
            <th>Sl no</th>
            <th>Name</th>
            <th>Email</th>
        </tr>

        @foreach($user as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            
            <td><a  class="btn btn-primary" href="/editUser/{{$user->id}}">Edit</a></td>
            <td><a  class="btn btn-danger" href="/deleteUser/{{$user->id}}">Delete</a></td>
        </tr>
     @endforeach
    
</table>
<a  class="btn btn-success" href="/addUser">Add</a>
@endsection    
  