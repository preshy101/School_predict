<?php

namespace App\Http\Controllers;
use App\Models\School;
use App\Models\Application;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function allSchool(){
        $schools = School::all();
        return view('admin.school.school', compact('schools'));
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
    public function addSchool(Request $request){
        // dd($request->all());

        School::create([
            'name' => $request->name,
        ]);
        return redirect()->route('school');
    }

    public function deleteSchool($id){
        School::findOrFail($id)->delete();
        return redirect()->route('school');
    }
    public function editSchool($id){
        $school = School::findOrFail($id);
        return view('admin.school.edit_school', compact('school'));
    }

    public function updateSchool(Request $request,$id){

        $school = School::findOrFail($id);
        $school->name =  $request->name;
        $school->save();
        $message = 'school update successfully';
        return redirect()->route('school')->with($message);
    }
    public function Application(){
        $application = Application::all();
        return view('admin.application.listAdmitted',compact('application'));
    }
}