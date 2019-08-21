@extends('layouts.master')
@section('title')
    Vendor Restaurants
@endsection
@section('navbar')
@include('vendor.navbar')
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="card-title">My Restaurants</div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <td>Title</td>
                        <td>Location</td>
                        <td>Address</td>
                        <td>Status</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($restaurants as $restaurant)
                        <tr>
                            <td>
                                {{$restaurant->title}}
                            </td>
                            <td>
                                {{$restaurant->location->name}}
                            </td>
                            <td>
                                {{$restaurant->street_address}}
                            </td>
                            <td>
                                    {{($restaurant->is_approved==1)?'Approved':'Not Approved'}}
                             </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Actions">
                                        <a href="{{(url('restaurant/'.$restaurant->id))}}"><button type="button" class="btn btn-secondary">View</button></a>
                                        <a href="{{(url('vendor/edit-restaurant/'.$restaurant->id))}}"><button type="button" class="btn btn-warning">Edit</button></a>
                                        <a href="{{(url('vendor/delete-restaurant/'.$restaurant->id))}}"><button type="button" class="btn btn-danger">Delete</button></a>
                                  </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection