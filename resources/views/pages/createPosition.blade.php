@extends('layouts.app')

@section('content')
<form id="positionForm" action="{{route('posititon')}}"  method="post">
{{ csrf_field() }}
  <div class="container">
    
    <div class="section martop30">
        <h3 class="h3">Add new position.</h3>
	    <label><b>Position</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Ex: Laraval Developer ect." name="position" required>

        <label><b>Type</b> <span class="span">*</span></label>
	    <input type="text" placeholder="Ex: Work Online" name="type" required>

	    <label><b>Description</b> <span class="span">*</span></label>
        <textarea placeholder="Enter the Description" name="description" rows="7" required></textarea>
        
	    <label><b>Status</b> <span class="span">*</span></label>
        <input type="text" placeholder="Ex: 0 - deactive, 1- active" name="status" required>
        
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