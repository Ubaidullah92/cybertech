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
        return view('pages.applicant');
    }

    public function getApplicant()
    {


        return datatables()->eloquent(Applicant::query())
                    ->addColumn('action', function ($data) {
                        $column1=($data->status === '1')?'<option value="1" selected="true">Selected</option>':'<option value="1">Selected</option>';
                        $column2= ($data->status === '2')?'<option value="2" selected="true">Pending</option>':'<option value="2">Pending</option>';
                        $column3= ($data->status === '3')?'<option value="3" selected="true">Rejected</option>':'<option value="3">Rejected</option>';
                        
                        
                        return '<select class="select" style="float: left;width: 60%;" onchange="changeStatus(this.value,'. $data->id .')" id="status'.$data->id.'">
                                '.$column1 . $column2 . $column3.'
                    </select> <a href="/applicant/' . $data->id . '" style="margin-top:10px" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> View</a>';
                    })
                    ->addIndexColumn()
                    ->toJson();
    

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $applicants = Applicant::find($id);
       return view('pages.showApplicant',compact('applicants'));
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
        Applicant::where('id',$id)->update(['status' => $request->status]);
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
