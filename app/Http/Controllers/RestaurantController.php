<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Restaurant;



class RestaurantController extends Controller
{

    

    public function index()
    {
        // return view("restaurants.index");
    }

    public function create()
    {
        return view('restaurants.create');   
        // return "hello";
    }
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'name'=>'required',
        //     'address'=>'required',
        //     'contact'=>'required'
        // ]);
        // if($request->hasFile('logo')){
            // $filenameFull = $request->file('logo')->getClientOriginalName();
            // $extension = $request->file('logo')->getClientOriginalExtension();

            // $filename = pathinfo($filenameFull, PATHINFO_FILENAME);

            // $filenameToStore = $filename.'_'.time().'.'.$extension;
            //     // upload image
            //     $path = $request->file('logo')->storeAs('public/img/logo',$filenameToStore);

            // } else {
            //     $filenameToStore = 'noimage.jpg';
            // }


        $rest = new Restaurant();
        $rest->name = $request->input('name');
        $rest->address = $request->input('address');
        $rest->contact = $request->input('contact');
        // $rest->logo = $filenameToStore;
        $rest->save();

        return redirect('/restaurant/create')->with('success','Restaurant added successfully !!');
        
    }
    public function show()
    {
        $rests = Restaurant::all();
        // return $rests;
        return view('restaurants.show',compact('rests'));
    }

    public function edit($id)
    {
        $rest = Restaurant::find($id);
        return view('restaurants.edit',compact('rest'));

    }
    public function update(Request $request, $id)
    {
        $rest = Restaurant::find($id);
        $rest->name = $request->input('name');
        $rest->address = $request->input('address');
        $rest->contact = $request->input('contact');
        $rest->save();
        // $d=print_r($request->input('id'));
        // return $rest;
        return redirect("restaurant/show")->with('success','Restaurants updated successfully !!');

    }
    public function delete($id)
    {
        $rest = Restaurant::find($id);
        $rest->delete();

        return redirect('restaurant/show')->with('error','Restaurant deleted successfully !!');
    }
}
