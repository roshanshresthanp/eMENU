<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Restaurant;


    

class MenuController extends Controller
{
    /**
     * 
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    


    public function index()
    {
        $menus = Menu::all();
        $rests = Restaurant::all();
        return view('menus.index')->with('menus',$menus)
                                ->with('rests',$rests);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        $rests = Restaurant::all();
        return view('menus.create')->with('menus',$menus)
                                    ->with('rests',$rests);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $menu = new Menu();
        $menu->name = $request->input('name');
        $menu->restaurant_id = $request->input('restaurant_name');
        $menu->save();

        return redirect('/menu/create')->with('success','Menu created successfully !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // return view('menus.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $rests = Restaurant::all();
        return view('menus.edit',compact('menu','rests'));
        // return "edit";
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
        $menu = Menu::find($id);
        
        $menu->name = $request->input('name');
        $menu->restaurant_id = $request->input('restaurant_name');
        $menu->save();

        // $d = print_r($request->input());
        return redirect('menu')->with('success','Menu updated successfully !!');
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect('/menu')->with('success','Menu deleted successfully !!');
    }
}
