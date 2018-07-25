@extends('layouts.app')

@section('content')
<form id="positionForm" action="{{route('position.store')}}"  method="post">
{{ csrf_field() }}
  <div class="container">
    
    <div class="section martop30">
        <h3 class="h3">Add new position.</h3>
	    <label><b>Position</b> <span class="span">*</span></label>
	    <input class="{{hasError($errors, 'position')}}" type="text" placeholder="Ex: Laraval Developer ect." name="position" value="{{Request::old('position')}}" required>
        {!! isError($errors, 'position') !!}
        <label><b>Type</b> <span class="span">*</span></label>
	    <input class="{{hasError($errors, 'type')}}" type="text" placeholder="Ex: Work Online" name="type" value="{{Request::old('type')}}" required>
        {!! isError($errors, 'type') !!}
	    <label><b>Description</b> <span class="span">*</span></label>
        <textarea class="{{hasError($errors, 'description')}}" placeholder="Enter the Description" name="description" rows="7" required>{{Request::old('description')}}</textarea>
        {!! isError($errors, 'description') !!}
	    <label><b>Status</b> <span class="span">*</span></label>
        <input class="{{hasError($errors, 'status')}}" type="text" placeholder="Ex: 0 - deactive, 1- active" name="status" value="{{Request::old('status')}}" required>
        {!! isError($errors, 'status') !!}
        <div class="clearfix" style="padding-left: 65%; margin-top: 30px;">
            <button type="submit" class="signupbtn">Submit</button>
            <button type="button" class="cancelbtn" onclick="reset()">Reset</button>
        </div>  
	</div>
    

  </div>
</form>
@endsection

@push('script')
<script>
    function reset() {
        document.getElementById("positionForm").reset();
    }
</script>
@endpush