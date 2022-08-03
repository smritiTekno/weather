@extends('layout')
  
@section('content')
<div class="container">
   
    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
       
            @foreach($user as $users)
           <tr>
           <td>{{$users->id}}</td>
           <td>{{$users->name}}</td>
           <td>{{$users->email}}</td>
           <td>{{$users->password}}</td>
          
            <td>
            <form action="{{ route('users.destroy',$users->id)}}" method="post">
            <a class="btn btn-primary" href="{{ route('users.edit',$users->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form></td>
           </tr>
            @endforeach
        </tbody>
    </table>
</div>
   
</body>
   


@endsection