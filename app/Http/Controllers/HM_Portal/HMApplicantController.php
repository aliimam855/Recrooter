<?php

namespace App\Http\Controllers\HM_Portal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Job;
use App\Models\Applicant;
use App\Models\Candidate;
use App\Models\Interview;
use App\Models\Note;
use App\Models\PhoneInterview;
use App\Models\OnsiteInterview;
use Auth;
use File;
use PDF;
use Load;
use Carbon\Carbon;

class HMApplicantController extends Controller
{
    //__Index Method__//
    public function index()
    {

      $interview = Interview::where('interviewer', Auth::user()->name)->get();
    
     // $applicants = Applicant::all();
     $candidates = Candidate::all();
   
   
    // dd($applicants);

    // return response()->json($applicants);

     return view('hm-portal.hm-applicant.index',compact('interview','candidates'));

    }

     //__Show Method__//
     public function show($id)
     {
       //$applicant = Applicant::find($id);
       $candidate = Candidate::find($id);

       $interview = Interview::where('candidate_id', $id)->get();
      
        //dd($applicant);

       $note = Note::where('candidate_id',$id)->get();

       $phone_interview = PhoneInterview::where('candidate_id',$id)->get();

       $onsite_interview = OnsiteInterview::where('candidate_id',$id)->get();
 
       $date = Carbon::now();

      return view('hm-portal.hm-applicant.show', compact('candidate','interview','note','phone_interview','onsite_interview'));
 
    }

    //__Update Method__//
    public function update(Request $request,$id)
    {
        $candidate =Candidate::find($id);
         //get the record

         

        $candidate->update([

          'sub_status' => $request->sub_status,
          'other_interviewer' => $request->other_interviewer,
         
         

        ]);
        $notification = array('message' => 'Successfully Updated!', 'alert-type' => 'success');
        return redirect()->back()->with($notification);
    }
}
