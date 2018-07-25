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
                        <table id="positionData" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>id</th> 
                                <th>Position</th>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Status</th>
                                 
                                
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

              $('#positionData').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('position.view')}}",
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'position', name: 'position' },
                    { data: 'type', name: 'type' },
                    { data: 'description', name: 'description' },
                    { data: 'status', name: 'status' }
                ]
            });

        })
    </script>
  
@endpush