@extends('layout')
@section('content')<h3>Weather</h3>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('users.index') }}">Manage User</a>
</div>
    <table class="table table-striped  table-bordered data-table">
        <thead>
            <tr>
                <th>#</th>
                <th>City</th>
                <th> Weather condition</th>
                <th>Temperature <br>in Celsius</th>
                <th> Feels like in Celsius</th>
                <th>Humidity</th>
                <th>Wind speed <br> in km/hour</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($city_records as $city_record)
           <tr>
           <td>{{$city_record->id}}</td>
           <td>{{$city_record->city_id}}</td>
           <td>{{$city_record->weather_condition}}</td>
           <td>{{$city_record->temperature_celsius}}</td>
           <td>{{$city_record->feels_like_celsius}}</td>
           <td>{{$city_record->humidity}}</td>
           <td>{{$city_record->wind_speed}}</td>
           <td>{{$city_record->created_at}}</td>
            <td>
            <form action="{{ route('user.delete',$city_record->id)}}" method="post">
            <a class="btn btn-primary" href="{{ route('user.edit',$city_record->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form></td>
           </tr>
            @endforeach
        </tbody>
        
       
    </table>
    
   
    
@endsection
