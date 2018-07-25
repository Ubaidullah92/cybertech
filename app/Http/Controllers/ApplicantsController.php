<?php

namespace App\Http\Controllers;

use App\Applicant;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'nicNumber' => 'required',
            'fileToUpload' => 'required',
            'email' => 'required',
        ]);
       try{
            $position = new Applicant();
            $position->first_name = $request->firstName;
            $position->last_name = $request->lastName;
            $position->address = $request->address;
            $position->email = $request->email;
            $position->birthday = $request->firstName;
            $position->nicNumber = $request->lastName;
            $position->address = $request->address;
            $position->email = $request->email;
            $position->save(); 
            $notification = array(
                'message' => 'Position Successfly Added', 
                'alert-type' => 'success'
            );
            return redirect('/position')->with($notification);
       }catch(QueryExeption $e){
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
