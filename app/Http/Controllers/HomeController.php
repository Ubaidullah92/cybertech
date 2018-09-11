<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;
use App\Applicant;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;


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
            'mobileNumber' => 'required|numeric',
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
            $url = storage_path().'\app\files\\'. $applicant->cv_upload;
            $position = Position::find($applicant->position);
            $applicant->applied_position = $position->position;
            $data = [
                'email' => 'ubaidullah.xplosa@gmail.com', 
                'applicant' => $applicant,
                'url' => $url,
                'from' => 'u122195@gmail.com', 
                'from_name' => 'CyberTech',
            ];
            Mail::send('pages.email', $data, function ($message) use ($data) {
                $message->to($data['email'])->from($data['from'], $data['from_name'])->subject('Applicant Details!')->attach($data['url']);
            }); 
            $notification = array(
                'message' => 'Application Successfly',   
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

    public function test()
    {
        
        $htmlContent = file_get_contents("https://web.whatsapp.com/");
		
        $DOM = new \DOMDocument();
        $DOM->loadHTML($htmlContent);
        dd($DOM);
        $Header = $DOM->getElementsByTagName('th');
        $Detail = $DOM->getElementsByTagName('td');
    
        //#Get header name of the table
        foreach($Header as $NodeHeader) 
        {
            $aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
        }
        //print_r($aDataTableHeaderHTML); die();
    
        //#Get row data/detail table without header name as key
        $i = 0;
        $j = 0;
        foreach($Detail as $sNodeDetail) 
        {
            $aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);
            $i = $i + 1;
            $j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
        }
        print_r($aDataTableDetailHTML); die();
       
    }
}
