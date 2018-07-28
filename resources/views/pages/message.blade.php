@extends('layouts.app')

@section('content')
<form id="positionForm" action="{{route('position.store')}}"  method="post">
{{ csrf_field() }}
  <div class="container">
    
    <div class="section martop30">
        <h3 class="h3">Share via Email</h3>
	    <label><b>To Email</b> </label>
        <input  type="text" placeholder="to:" name="to_mail"  required>
        
        <label>Message</label>
                <textarea name="message" id="message" rows="7" required></textarea>
        
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
   var area = document.getElementById("message");
    area .value = {{!! $message !!}};
</script>
@endpush