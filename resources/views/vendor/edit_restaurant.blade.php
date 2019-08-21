
@extends('layouts.master')
@section('title')
    Vendor Edit Restaurant
@endsection
@section('navbar')
@include('vendor.navbar')
@endsection
@section('content')
    <div class="row">
        <div class="col-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        Edit Restaurent
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{url('/vendor/update-restaurant')}}">
                        @csrf
                        <input type="hidden" name="id" value="{{$restaurant->id}}">
                        <div class="form-group">
                          <label >Title</label>
                          <input type="text" name="title" value="{{$restaurant->title}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Description</label>
                          <input type="text" name="description" value="{{$restaurant->description}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Street Address</label>
                          <input type="text" name="street_address" value="{{$restaurant->street_address}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Location</label>
                          <select name="location" class="form-control" required>
                            <option></option>
                            @foreach (App\Location::all() as $location)
                            <option value="{{$location->id}}" value="{{($restaurant->location_id==$location->id)?'selected':''}}">{{$location->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label >Phone</label>
                          <input type="phone" name="phone" value="{{$restaurant->phone}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Email</label>
                          <input type="email" name="email" value="{{$restaurant->email}}" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Cover image</label>
                          <input type="file" name="cover_image" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Menu image</label>
                          <input type="file" name="menu_image" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success">Update</button>
                         </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection