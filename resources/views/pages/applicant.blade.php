@extends('layouts.app')

@section('content')

    <!-- <a href="/position/create" type="button" class="signupbtn" >Add Position</a> -->
    <section class="content">
        <div class="row">
            <div class="col-md-1">

            </div>
            <div class="col-md-10 body-table" >
                <div class="box">
                    <div class="box-body">
                        <table id="applicanData" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th> 
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Position</th>
                                <th style="width:250px">Action</th>
                                 
                                
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div>
            </div>
            <div class="col-md-1">

                </div>
        </div>
    </section>
@endsection


@push('script')
    <script src="js/datatables.min.js"></script>
    <script  type="text/javascript">
        $(function () {
           
            var table =  $('#applicanData').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('applicant.view')}}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'last_name', name: 'last_name' },
                    { data: 'email', name: 'email' },
                    { data: 'mobile', name: 'mobile' },
                    { data: 'position', name: 'position' },
                    { data: 'action', name: 'action' },
                ]
            });
            table.on( 'xhr', function ( e, settings, json ) {
                        json.data.forEach(function(val){
                        })
            } );    
        })


    </script>
  
@endpush