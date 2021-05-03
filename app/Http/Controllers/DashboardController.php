<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Menu;


class DashboardController extends Controller
{
    
    public function index()
    {
        return view('dashboard');
    }
    public function home($id)
    {
        $rest = Restaurant::find($id);
        
        // return $rest->foods;
        $menu = $rest->menus;
        $food = $rest->foods;
        return view('show',compact('menu','food','rest'));
    }
    public function test()
    {
        $rests = Restaurant::all();
        return view('test',compact('rests'));
        // with('msg',$rests)
        // return response()->json(array('msg'=> $rests), 200);
        // return $rests;
        

    }
    public function show($id)
    {
        $rests = Restaurant::find($id);
        $menus = Menu::find(8);
        
        // return $rests->menus;
        // return $menus->foods;
        return $rests->foods;
    }
}