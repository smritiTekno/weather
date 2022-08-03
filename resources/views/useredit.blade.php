@extends('layout')
@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-8 margin-tb">
            <div class="pull-left">
            <h2>Edit </h2>
            </div>
        </div>
    </div>

    @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
    {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('users.update',$user->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PUT')
            <div class="row">
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <div class="form-group">
                        <strong> Name:</strong>
                        <input type="text" name="name" value="{{$user->name}}" id="name" class="form-control" required>
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <div class="form-group">
                        <strong>Emai:</strong>
                        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" required>
                        @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8">
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" name="password" id="password" class="form-control" value="{{$user->password}}" readonly required>
                        @error('password')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
        <button type="submit" class="btn btn-primary ml-3">Update</button>
    </form>
</div>

@endsection