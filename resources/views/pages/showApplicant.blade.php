@extends('layouts.app')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-1">

            </div>
                <div class="box">
                    <div class="box-body">
                      <ul>
                        <li><b>First Name: </b> {{$applicants->first_name}}</li>
                        <li><b>Last Name: </b> {{$applicants->last_name}}</li>
                        <li><b>Address: </b> {{$applicants->address}}</li>
                        <li><b>Email: </b> {{$applicants->email}}</li>
                        <li><b>Mobile Number: </b> {{$applicants->mobile}}</li>
                        <li><b>Date of Birth: </b> {{$applicants->dob}}</li>
                        <li><b>NIC Number: </b> {{$applicants->nic_no}}</li>
                        <li><b>Applied Position: </b> {{$applicants->position}}</li>
                        <li><b>Previously worked company: </b> {{$applicants->last_company}}</li>
                        <li><b>Your job tittle: </b> {{$applicants->last_tittle}}</li>
                        <li><b>Monthly salary was: </b> {{$applicants->last_salary}}</li>
                        <li><b>Experience in years: </b> {{$applicants->experience}}</li>
                        <li><b>Areas you're expertise with: </b> {{$applicants->notes}}</li>
                        <li><b>Bank Account Number: </b> {{$applicants->account_no}}</li>
                        <li><b>Account Holder's Name: </b> {{$applicants->account_name}}</li>
                        <li><b>Bank Name: </b> {{$applicants->bank}}</li>
                        <li><b>Branch: </b> {{$applicants->branch}}</li>

                      </ul>
                      <a  href="/applicant" type="button" class="backbtn" >Go Back</a>
                      
                      @if($applicants->status == 1)
                      <button type="button" id="reject" onclick="changeStatus({{$applicants->id}},3)" class="cancelbtn">Reject this applicant</button>
                      @else
                      <button type="button" id="select" onclick="changeStatus({{$applicants->id}},1)" class="signupbtn">Select this applicant</button>
                      @endif
                    </div><!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-1">

                </div>
        </div>
    </section>
@endsection


@push('script')
    <script src="/js/datatables.min.js"></script>
    <script>
    
  
        function changeStatus(id,status){
            $.ajax({
            url     : '/applicant/'+id,
            method  : 'PUT',
            data    : {
                status  : status,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },    
            
            success : function(response){
                window.location.reload(1);
            }
        });
        }
    </script>
  
@endpush