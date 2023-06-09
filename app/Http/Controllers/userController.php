<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Application;
use App\Models\User;
use App\Models\Department;
use App\Models\PostUtme;
use App\Models\Olevel;
use App\Models\School;
use App\Models\cuttOff;
use Illuminate\Http\Request;

class userController extends Controller
{
      public function allApplication(){
        $applications = Application::all();
        return view('admin.application.listAdmitted', compact('applications'));
    }
    public function allUser(){
        $users = User::all();
        return view('admin.user.user', compact('users'));
    }
    public function alladmitted(){
        return view('admin.application.application');
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
                'image' => $filename
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
    public function predict($id){
        $findApllication = Application::where('user_id',$id)->first();
        $averageOlevelScore = Olevel::where('user_id',$id)->avg('maths','eng','chem','phys','bio','othwerScore1','othwerScore2','othwerScore3');
        $sumPostUtme = PostUtme::where('user_id',$id)->first();
        $sumPostUtme = $sumPostUtme->sub1score+ $sumPostUtme->sub2score+ $sumPostUtme->sub3score+ $sumPostUtme->sub4score;
       if(!$findApllication){

        Application::create([
                'user_id' => $id,
                'cuttOff' => $sumPostUtme,
                'status' =>'pending',
                'year' => date('Y')
            ]);
        }  $dept = PostUtme::where('user_id',$id)->first();
        if($averageOlevelScore && $sumPostUtme){
        $OlevelCuttOff = Department::find($dept->dept_id);
        $departmentCuttOff = cuttOff::where('dept_id',$dept->dept_id)->first();
        // dd($departmentCuttOff);
        if($sumPostUtme >= $departmentCuttOff->cutOff && $averageOlevelScore >= $OlevelCuttOff->O_level_avg ){
            return view('admin.application.admitted',[
                'message' => 'Excellent performance high chance of admission in '.$OlevelCuttOff->name.', reached cutt-off for post-UTME and Olevel',
                'status' => true,
                'yourOlevel' => $averageOlevelScore,
                'olevelAverage' => $OlevelCuttOff,
                'yourPostUtme' => $sumPostUtme,
                'cuttOff' => $departmentCuttOff->cutOff,
                'admited' => $findApllication
            ]);
        }


        if( $sumPostUtme < $departmentCuttOff->cutOff && $averageOlevelScore < $OlevelCuttOff->O_level_avg ){
            return view('admin.application.admitted',[
                'message' => 'Poor performance for '.$OlevelCuttOff->name.' No chance of admission, You did not reach cutt-off for post-UTME, and Olevel',
                'status' => false,
                'yourOlevel' => $averageOlevelScore,
                'olevelAverage' => $OlevelCuttOff,
                'yourPostUtme' => $sumPostUtme,
                'cuttOff' => $departmentCuttOff->cutOff,
                'admited' => $findApllication
            ]);
        }


        if( $sumPostUtme >= $departmentCuttOff->cutOff ){
            return view('admin.application.admitted',[
                'message' => 'Good performance for '.$OlevelCuttOff->name.', reached cutt-off for post-UTME, your Olevel will be reviewed by admin',
                'status' => true,
                'yourOlevel' => $averageOlevelScore,
                'olevelAverage' => $OlevelCuttOff,
                'yourPostUtme' => $sumPostUtme,
                'cuttOff' => $departmentCuttOff->cutOff,
                'admited' => $findApllication
            ]);
        }else if($averageOlevelScore >= $OlevelCuttOff->O_level_avg ){
            return view('admin.application.admitted',[
                'message' => 'performaned poorly for '.$OlevelCuttOff->name.'Department, low chance of admission, We strongly advise you enroll for pre degree. You did not reach cutt-off for post-UTME, however you smashed the O"level',
                'status' => 'warning',
                'yourOlevel' => $averageOlevelScore,
                'olevelAverage' => $OlevelCuttOff,
                'yourPostUtme' => $sumPostUtme,
                'cuttOff' => $departmentCuttOff->cutOff,
                'admited' => $findApllication
            ]);
        }


    }else{
        $error = 'Please fill and submit Olevel and PostUtme to proceed to predictions';
        return view('admin.application.application',compact('error'));
    }


        // dd($departmentCuttOff);
        }
    public function viewUser($id){
        $applicant = User::findOrFail($id);
        $olevels = Olevel::where('user_id',$id)->get();
        $postutmes = PostUtme::where('user_id',$id)->first();
        // dd($olevels);
        return view('admin.user.viewUsers',compact('applicant','olevels','postutmes'));
    }
    public function deleteApplication($id){
        Application::find($id)->delete();
        return redirect()->back();
    }
    public function deleteUser($id){
        User::find($id)->delete();
        return redirect()->back();
    }
    public function destory(Request $request){
      Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function updateApplication(Request $request, $id){
        $app = Application::find($id);
        $app->status = $request->admit;
        $app->save();
        $userAdmitted = User::where('id',$app->user_id)->first();
        $userAdmittedUpdate = User::find($userAdmitted->id);
        $userAdmittedUpdate->admitted = ($request->);
        $userAdmittedUpdate->save();

    session()->flash('message','Application updated  Successfully');
        return redirect()->back();
    }
    public function searchPredict(Request $request){

        return 'working';
    }
}