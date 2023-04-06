<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\School;
use Illuminate\Http\Request;

class DeptController extends Controller
{
    public function allDepartment(){
        $depts = Department::all();
        $schools = School::all();
        return view('admin.department.department', compact('depts','schools'));
    }

    // public function searchHospital(Request $request){
    //     // $request->validate([
    //     //     'search'=> 'required'
    //     // ]);
    //     $order = $request->search;
    //     $orders = null;
    //     if($order){
    //     $orders = Hospital::with('departments', 'doctors')
    //         ->where('name','LIKE',"%$order%")->limit(6)->get();
    //     }
    //     return $orders;
    // }
    public function addDepartment(Request $request){

         Department::create([
            'name' => $request->name,
            'school_id' => $request->school_id,
            'O_level_avg' => $request->level,
            'info' => $request->info,

        ]);
        return redirect()->route('departments');
    }

    public function deleteDepartment($id){
        Department::findOrFail($id)->delete();
            return redirect()->route('departments');
    }
    public function editDepartment($id){
        $department = Department::findOrFail($id);
        $schools = School::all();
        return view('admin.department.edit_department', compact('department','schools'));
    }
    // public function viewHospital($id){
    //     $hospital = Hospital::findOrFail($id);
    //     return view('admin.hospital.view_hospital', compact('hospital'));
    // }
    public function updateDepartment (Request $request,$id){

        $department = Department::findOrFail($id);
        $department->name =  $request->name;
        $department->school_id = $request->school_id;
        $department->O_level_avg = $request->level;
        $department->info = $request->info;

        $department->save();
         return redirect()->route('departments');
    }
}