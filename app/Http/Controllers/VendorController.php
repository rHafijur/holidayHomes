<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class VendorController extends Controller
{
    public function index(){
        return view('vendor.index');
    }
    public function restaurants(){
        $restaurants=auth()->user()->vendor->restaurants;
        // dd($restaurants);
        return view('vendor.restaurants',compact('restaurants'));
    }
    public function resorts(){
        
    }
    public function add_restaurant(){
        return view('vendor.add_restaurant');
    }
    public function add_resort(){
        return view('vendor.add_resort');
    }
    public function save_restaurant(Request $request){
        $vendor=auth()->user()->vendor;
        $vendor->restaurants()->create([
            'title'=>$request->title,
            'description'=>$request->description,
            'street_address'=>$request->street_address,
            'location_id'=>$request->location,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'cover_image'=>$request->cover_image->store('public/images'),
            'menu_image'=>$request->menu_image->store('public/images'),
            ]);
            // dd($request);
            return redirect('vendor/restaurants');
    }
    public function save_resort(Request $request){
        
    }
    public function edit_restaurant($id){
        $restaurant=Restaurant::find($id);
        // dd($restaurant->location_id);
        return view('vendor.edit_restaurant',compact('restaurant'));
    }
    public function edit_resort(){
        
    }
    public function update_restaurant(Request $request){
        $res=Restaurant::find($request->id);
        $res->title=$request->title;
        $res->description=$request->description;
        $res->street_address=$request->street_address;
        $res->location_id=$request->location;
        $res->phone=$request->phone;
        $res->email=$request->email;
        $res->cover_image=$request->cover_image->store('public/images');
        $res->menu_image=$request->menu_image->store('public/images');
        $res->save();
        return redirect('restaurant/'.$request->id);
    }
    public function update_resort(Request $request){
        
    }
    public function delete_restaurant($id){
        Restaurant::find($id)->delete();
        return redirect()->back();
    }
    public function delete_resort($id){
        
    }
}
