@extends('layouts.master')
@section('title')
    Restaurant - Search
@endsection
@section('navbar')
{{-- @include('vendor.navbar') --}}
@endsection
@section('content')
    <div class="row">
        <div class="col-6 offset-3">
            <form action="{{url('search')}}" method="get">
                <div class="form-row">
                        <div class="form-group">
                                
                                <select name="location_id" class="form-control" required>
                                  <option>Search</option>
                                  @foreach (App\Location::all() as $location)
                                  <option value="{{$location->id}}">{{$location->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                        <div class="form-group">
                                <button class="btn btn-secondary">Search</button>
                        </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <h1>Result</h1>
       <div class="col-6 offset-3">
            <ul class="list-group">
                    @foreach ($restaurants as $restaurant)
                    <li class="list-group-item"><a href="{{url('restaurant/'.$restaurant->id)}}">{{$restaurant->title}}</a></li>
                    @endforeach
                    
            </ul>
       </div>
    </div>
@endsection