@extends('layouts.master')
@section('title')
    Vendor Add Restaurant
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
                        Add New Restaurent
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{url('/vendor/save-restaurant')}}">
                        @csrf
                        <div class="form-group">
                          <label >Title</label>
                          <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Description</label>
                          <input type="text" name="description" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Street Address</label>
                          <input type="text" name="street_address" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Location</label>
                          <select name="location" class="form-control" required>
                            <option></option>
                            @foreach (App\Location::all() as $location)
                            <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label >Phone</label>
                          <input type="phone" name="phone" class="form-control" required>
                        </div>
                        <div class="form-group">
                          <label >Email</label>
                          <input type="email" name="email" class="form-control" required>
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
                            <button class="btn btn-success">Save</button>
                         </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
@endsection