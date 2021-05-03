<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Food;

class FoodController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        $foods = Food::all();

        return view("foods.index")->with('menus',$menus)
                                ->with('foods',$foods);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $foods = Food::all();

        return view("foods.create")->with('menus',$menus)
                                ->with('foods',$foods);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('food_image')){
            $filenameFull = $request->file('food_image')->getClientOriginalName();
            $extension = $request->file('food_image')->getClientOriginalExtension();

            $filename = pathinfo($filenameFull, PATHINFO_FILENAME);

            $filenameToStore = $filename.'_'.time().'.'.$extension;
                // upload image
                $path = $request->file('food_image')->storeAs('public/img/food',$filenameToStore);

            }else {
                $filenameToStore = 'noimage.jpg';
            }

            
        $des = $request->input('description');
        if(empty($des))
        $des = '';
        else{
            $des = $des;
        }

        $food= new Food();
        $food->name = $request->input('name');
        $food->price = $request->input('price');
        $food->description = $des;
        $food->food_image = $filenameToStore;
        $food->menu_id = $request->input('menu_name');
        $food->save();
        return redirect("/food/create")->with('success','Food added successfully !!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del = Food::find($id);
        $del->delete();
        return redirect('food')->with('success','Food deleted successfully !!');
    }
}
