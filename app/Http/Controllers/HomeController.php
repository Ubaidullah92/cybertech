<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Applicant;
use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::where('status',1)->get();
        return view('pages.index',compact('positions'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'email' => 'required',
            'mobileNumber' => 'required|numeric|max:10',
            'birthday' => 'required',
            'nicNumber' => 'required',
            'fileToUpload' => 'required',

            /* proffesional details*/
            'positionApply' => 'required',
            'lastCompany' => 'required',
            'lastTittle' => 'required',
            'lastSalary' => 'required',
            'experience' => 'required',
            'notes' => 'required',

            /*  Account details*/

            'accNumber' => 'required|numeric',
            'accName' => 'required',
            'bankName' => 'required',
            'branch' => 'required',
            'agreement' => 'required',

        ]);
        try {
            
            $position = Position::select('position')->find($request->positionApply);
            $file_name = $request->firstName.'_'.$request->lastName.'-'.$position->position.'-'. date('d m Y h iA').'.'.$request->fileToUpload->getClientOriginalExtension();
            $path = $request->file('fileToUpload')->storeAs('files' , $file_name);
            
            $applicant = new Applicant();
            $applicant->first_name = $request->firstName;
            $applicant->last_name = $request->lastName;
            $applicant->address = $request->address;
            $applicant->email = $request->email;
            $applicant->mobile = $request->mobileNumber;
            $applicant->dob = $request->birthday;
            $applicant->nic_no = $request->nicNumber;
            $applicant->cv_upload = $file_name;
            //  proffesional details
            $applicant->position = $request->positionApply;
            $applicant->last_company = $request->lastCompany;
            $applicant->last_tittle = $request->lastTittle;
            $applicant->last_salary = $request->lastSalary;
            $applicant->experience = $request->experience;
            $applicant->notes = $request->notes;

            //    Account details
            $applicant->account_no = $request->accNumber;
            $applicant->account_name = $request->accName;
            $applicant->bank = $request->bankName;
            $applicant->branch = $request->branch;

            $applicant->status = 2; //    pending status
            $applicant->save();

            /*send  email */
         /*    $data = [
                'email' => 'ubaidullah.xplosa@gmail.com', 
                'applicant' => $applicant,
                'from' => 'u122195@gmail.com', 
                'from_name' => 'CyberTech',
            ];
            Mail::send('pages.email', $data, function ($message) use ($data) {
                $message->to($data['email'])->from($data['from'], $data['from_name'])->subject('Applicant Details!')->attach('/files/'.$data['applicant']['cv_upload']);
            });  */
            $notification = array(
                'message' => 'Position Successfly Added',   
                'alert-type' => 'success'
            );
            return redirect('/')->with($notification);
        } catch (QueryExeption $e) {
            $notification = array(
                'message' => 'Something went wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
}
