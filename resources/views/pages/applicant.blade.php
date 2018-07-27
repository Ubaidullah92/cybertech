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


        <script type="text/javascript">
        var oInput = document.getElementById('applicanData'),
            oChild;
        for(i = 0; i < oInput.childNodes.length; i++){
            oChild = oInput.childNodes[i];
            if(oChild.nodeName == 'select'){
                alert(oChild.id);
            }
        }

    </script>
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


            var rowst= document.getElementsByTagName("select");

            // let arry = Array.from(rowst)
            // var array=[];
            console.log(rowst );
            // for(i = 0; i < rowst.length; i++){
            //     array.push(i);
            //     console.log(i);
            // }

        })


        function changeStatus(val,id) {
        /* var xhttp;    
        xhttp = new XMLHttpRequest();
     
        xhttp.open("PUT", "applicant/"+id+"?status"++val, true);
        xhttp.send();*/
        
        $.ajax({
            url     : '/applicant/'+id,
            method  : 'PUT',
            data    : {
                status  : val,
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },    
            
            success : function(response){
            }
        });
    }
    </script>
  
@endpush