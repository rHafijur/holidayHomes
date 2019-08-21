@extends('layouts.master')
@section('title')
    Restaurant - {{$restaurant->title}}
@endsection
@section('navbar')
{{-- @include('vendor.navbar') --}}
@endsection
@section('content')
    <div class="row">
        <div class="col-12" >
                <img  src="{{asset('storage/'.str_replace('public/','',$restaurant->cover_image))}}" class="img-fluid" alt="Cover Photo">
        </div>
    </div>
    <div class="row">
        <div class="col-5">
                <ul class="list-group">
                        <li class="list-group-item"><strong>Restuarant:</strong> {{$restaurant->title}}</li>
                        <li class="list-group-item"><strong>Description:</strong> {{$restaurant->description}}</li>
                        <li class="list-group-item"><strong>Phone:</strong> {{$restaurant->phone}}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{$restaurant->email}}</li>
                        <li class="list-group-item"><strong>Street:</strong> {{$restaurant->street_address}}</li>
                        <li class="list-group-item"><strong>Location:</strong> {{$restaurant->location->name}}</li>
                        
                </ul>
        </div>
        <div class="col-7">
                <img  src="{{asset('storage/'.str_replace('public/','',$restaurant->menu_image))}}" class="img-fluid" alt="Menu Photo">
        </div>
    </div>
@endsection