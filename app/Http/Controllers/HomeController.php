<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Data;


class HomeController extends Controller
{
    //
    
    public function index(){
        $datas = Data::all();
        // $datas = Data::paginate(10);
        return view('layouts.secondmaster');
        // return view('Home.index')->with('datas', $datas);
    }
    public function showdata(){
        $datas = Data::all();
        return view('home.index')->with('datas', $datas);;
    }
    public function contact(){

        return view('Home.contact');
    }
    public function aboutus(){

        return view('Home.aboutus');
    }
}
