@extends('layouts.app')

@section('content')

    <!-- <a href="/position/create" type="button" class="signupbtn" >Add Position</a> -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <!-- <th>#</th> -->
                                <th>Place Name</th>
                                <th>Description</th>
                                <th>Category</th>
                                <th>Region</th>
                                <!-- <th>City</th> -->
                                <!-- <th>Action</th> -->
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
<script src="js/datatables.min.js"></script>
<script>
    $(function () {
        var data = [
    [
        "Tiger Nixon",
        "System Architect",
        "Edinburgh",
        "5421",
        
    ],
    [
        "Garrett Winters",
        "Director",
        "Edinburgh",
        "8422",
       
    ]
]
         var t =    $('#example1').DataTable({
            data: data
               /*  processing: true,
                serverSide: true,

                ajax: {
                    url: '/position/view',
                    method: 'POST'
                },
                columns: [
                    {data: 'DT_Row_Index',name:'DT_Row_Index'},
                    {data: 'place_name', name: 'place_name'},
                    {data: 'description', name: 'description'},
                    {data: 'category_name', name: 'category_name'},
                    {data: 'region', name: 'region'},
                    {data: 'city', name: 'city'},
                    {data: 'action', name: 'action', orderable: false, searchable: false}
                ] */
            });


            /*success alert hide*/
            $("#success-alert").hide();
            $("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
                $("#success-alert").slideUp(500);
            });
        })
</script>
@endpush