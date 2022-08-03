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
<form action="{{ route('user.update',$daskboard->id)}}" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
@method('PUT')
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-8">
<div class="form-group">
<strong>City Name:</strong>
<input type="text" name="city_id" value="{{$daskboard->city_id}}" id="city_id" class="form-control" required>
@error('city_id')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
<div class="form-group">
<strong>Weather condition:</strong>
<input type="text" name="weather_condition" id="weather_condition" class="form-control" value="{{$daskboard->weather_condition}}" required>
@error('weather_condition')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
<div class="form-group">
<strong>Temperature in Celsius:</strong>
<input type="text" name="temperature_celsius" id="temperature_celsius" value="{{$daskboard->temperature_celsius}}" class="form-control" required>
@error('temperature_celsius')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
<div class="form-group">
<strong>Feels like in Celsius:</strong>
<input type="text" name="feels_like_celsius" id="feels_like_celsius" value="{{$daskboard->feels_like_celsius}}" class="form-control" required>
@error('feels_like_celsius')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
<div class="form-group">
<strong>Humidity:</strong>
<input type="text" name="humidity" id="humidity" value="{{$daskboard->humidity}}" class="form-control" required>
@error('humidity')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
<div class="col-xs-8 col-sm-8 col-md-8">
<div class="form-group">
<strong>Wind speed in km/hour:</strong>
<input type="text" name="wind_speed" id="wind_speed" value="{{$daskboard->wind_speed}}" class="form-control" required>
@error('wind_speed')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>
</div>
<button type="submit" class="btn btn-primary ml-3">Update</button>
</form>
</div>

@endsection