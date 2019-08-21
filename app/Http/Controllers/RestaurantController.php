<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    public function view($id){
        $restaurant=Restaurant::findOrFail($id);
        // dd($restaurant);
        return view('restaurant',compact('restaurant'));
    }
    public function search(Request $request){
        $restaurants=Restaurant::where('location_id',$request->location_id)->get();

        // dd($restaurant);
        return view('search',compact('restaurants'));
    }
}
