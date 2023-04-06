<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use App\Models\User;
use App\Models\Department;
use App\Models\PostUtme;
use App\Models\Olevel;
use App\Models\School;
use Illuminate\Http\Request;

class userController extends Controller
{
      public function allApplication(){
        $applications = Application::all();
        return view('admin.application.application', compact('applications'));
    }
    public function allUser(){
        $users = User::all();
        return view('admin.user.user', compact('users'));
    }
    public function alladmitted(){
        return view('admin.application.admitted');
    }
    public function Olevel(){
        return view('admin.olevel.olevel');
    }
    public function Utme(){
        // $schools = School::all();
        $depts = Department::all();
        return view('admin.utme.utme', compact( 'depts'));
    }
    public function AddOlevel(Request $request){
            $file = $request->file('result');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/result'), $filename);
            // dd($request->user());
            Olevel::create([
                'user_id' =>  $request->user()->id,
                'maths' => $request->maths,
                'eng' => $request->eng,
                'chem' => $request->chem,
                'phys' => $request->physics,
                'bio' => $request->bio,
                'othwers1' => $request->other1,
                'othwers2' => $request->other2,
                'othwers3' => $request->other3,
                'othwerScore1' => $request->other1score,
                'othwerScore2' => $request->other2score,
                'othwerScore3' => $request->other3score,
            ]);


        return redirect()->back();
    }
    public function AddUtme(Request $request){

            PostUtme::create([
                'user_id' =>  $request->user()->id,
                'dept_id' => $request->dept_id,
                'sub1' => $request->sub1,
                'sub2' => $request->sub2,
                'sub3' => $request->sub3,
                'sub4' => $request->sub4,
                'sub1score' => $request->score1,
                'sub2score' => $request->score2,
                'sub3score' => $request->score3,
                'sub4score' => $request->score4
            ]);


        return redirect()->back();
    }
}