<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Position;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'email' => 'required',
            'mobileNumber' => 'required',
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

            'accNumber' => 'required',
            'accName' => 'required',
            'bankName' => 'required',
            'branch' => 'required',
            'agreement' => 'required',

        ]);
        try {
            $position = Position::select('position')->find($request->positionApply);
            $file_name = $request->firstName.' '.$request->lastName.' - '.$position.' - '. date('d m Y h iA');

            $applicant = new Applicant();
            $applicant->first_name = $request->firstName;
            $applicant->last_name = $request->lastName;
            $applicant->address = $request->address;
            $applicant->email = $request->email;
            $applicant->mobile = $request->mobileNumber;
            $applicant->dob = $request->birthday;
            $applicant->nic_no = $request->nicNumber;
            $applicant->cv_upload = $file_name;
//           proffesional details
            $applicant->position = $request->positionApply;
            $applicant->last_company = $request->lastCompany;
            $applicant->last_tittle = $request->lastTittle;
            $applicant->last_salary = $request->lastSalary;
            $applicant->experience = $request->experience;
            $applicant->notes = $request->notes;

//            Account details
            $applicant->account_no = $request->accNumber;
            $applicant->account_name = $request->accName;
            $applicant->bank = $request->bankName;
            $applicant->branch = $request->branch;

            $applicant->branch = 2; //    pending status
            $applicant->save();
            $notification = array(
                'message' => 'Position Successfly Added',   
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } catch (QueryExeption $e) {
            $notification = array(
                'message' => 'Something went wrong!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
