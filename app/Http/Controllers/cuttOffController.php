<?php

namespace App\Http\Controllers;

use App\Models\cuttOff;
use App\Models\Department;
use Illuminate\Http\Request;

class cuttOffController extends Controller
{
   public function allCuttOff(){
        $cutts = cuttOff::all();
        $depts = Department::all();
        return view('admin.cuttoff.cuttoff', compact('cutts','depts'));
    }

    public function addCuttOff (Request $request){
        // dd($request->all());

         cuttOff::create([
            'cutOff' => $request->name,
            'dept_id' => $request->department
        ]);
        session()->flash('message','Cutt-Off created  Successfully');
        return redirect()->route('cutt');
    }

    public function deleteCutt($id){
        cuttOff::findOrFail($id)->delete();

        session()->flash('message','Cutt-Off deleted  Successfully');
        return redirect()->route('cutt');
    }
    public function editCutt($id){
        $cutts = cuttOff::findOrFail($id);
        $depts = Department::all();
        return view('admin.cuttoff.edit_cuttoff', compact('cutts','depts'));
    }
    // public function viewHospital($id){
    //     $hospital = Hospital::findOrFail($id);
    //     return view('admin.hospital.view_hospital', compact('hospital'));
    // }
    public function updateCutt(Request $request,$id){

        $cutts = cuttOff::findOrFail($id);
        $cutts->cutOff =  $request->name;
        $cutts->dept_id = $request->department;
        $cutts->save();

        session()->flash('message','Cutt-Off updated Successfully');
       return redirect()->route('cutt');
    }
}