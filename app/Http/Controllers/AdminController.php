<?php

namespace App\Http\Controllers;
use App\Models\Data;
use App\Models\Admin;
use DB;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    //
    //

    public function login(){
        
        // $data = Admin::all();
        // if($data->name=="Admin" && $data->Password=="Password"){
            return view('Admin.admin_login');
        
    }
    public function admincheck(Request $request){
        $request->validate([
            'name' => 'required',
            'password' => 'required'
        ]);
    }
    public function addnew(){
        
        return view('Admin.index');
    }

    public function index(){
        $datas = Data::all();
        return view('Admin.show')->with('datas', $datas);
    }

    public function adminsee(){
        $datas = Data::all();
        // $datas = Data::paginate(4);
        return view('admin.show')->with('datas', $datas);
    }
    public function add(Request $request){

        $request->validate([
            'states'=>'required',
            'activecases'=>'required',
            'recovered'=>'required',
            'deceased'=>'required',
            'confirmed'=>'required',

        ]);
        $data = new Data([
            'states'=>$request['states'],
            'active'=>$request['activecases'],
            'recovered'=>$request['recovered'],
            'deceased'=>$request['deceased'],
            'confirmed'=>$request['confirmed'],

        ]);
        $data->save();
        
        return view('Admin.index')->with([
            'message_success'=>'Data inserted'

        ]);
        
        
     }
    public function edit($id){
        $datas = Data::find($id);

        return view('Admin.edit')->with('datas',$datas);
    }

    public function update(Request $request){
        $datas = Data::find($request->id);
        $datas->states=$request->states;
        $datas->active=$request->activecases;
        $datas->recovered=$request->recovered;
        $datas->deceased=$request->deceased;
        $datas->confirmed=$request->confirmed;
        $datas->save();

        return $this->adminsee();

    }

    public function delete($id)
    {
        $datas = Data::find($id);
        $datas->delete();
        return $this->adminsee();
    }
}
