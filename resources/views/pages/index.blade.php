
<!DOCTYPE html>
<html>
    <head>
        <title>Application for candidates to register in to Cybertech Int team</title>
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
        <!-- my Styles -->
        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">

        <!-- toastr -->
        <link href="/css/toastr.min.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <a href="https://www.facebook.com/cybertechInt.lk/"><img src="logo.png" style="margin-left:100px; height: 85px; width: auto; position: absolute;" /><a/>
    <h2 class="h2">Signup Form to register for Cybertech Int team</h2>
    <p class="p">Fill all below fields to complete your application. If you have arised any inconvenience please call <a class="default" href="tel:(+94)713399099">(+94) 71-33 99 099</a> or email us your details to <a class="default" href="mailto:lakshitha@teamcybertech.com">Apply@teamcybertech.com</a></p>

    <div class="notice-frame">
        <h3 class="notice-header">Vacancies available to apply!</h3>
        <div class="notice-body">
            @foreach($positions as $position)
            <p class="notice-p"># {{$position->position}} - <span class="notice-span">{{$position->type}}</span></p>
            @endforeach
        </div>
    </div>

    <form id="applicantForm" action="{{route('store')}}" enctype="multipart/form-data"  method="post">
    {{ csrf_field() }}
        <div class="container">
            
            <div class="section">
                <h3 class="h3">Personal details.</h3>
                <label><b>First Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your first name" name="firstName" required>
                {!! isError($errors, 'firstName') !!}
                
                <label><b>Last Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your last name" name="lastName" required>
                {!! isError($errors, 'lastName') !!}

                <label><b>Address</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Residence Address" name="address" required>
                {!! isError($errors, 'address') !!}

                <label><b>Email</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Email address" name="email" required>
                {!! isError($errors, 'email') !!}

                <label><b>Mobile Number</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Mobile Number" name="mobileNumber" required>
                {!! isError($errors, 'mobileNumber') !!}

                <label><b>Date of Birth</b> <span class="span">*</span></label>
                <input type="date" placeholder="Enter your Birthday" name="birthday" required>
                {!! isError($errors, 'birthday') !!}

                <label><b>NIC Number</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your NIC Number" name="nicNumber" required>
                {!! isError($errors, 'nicNumber') !!}

                <label><b>Your CV</b> <span class="span">*</span></label>
                <div style="border:1px solid #ccc; padding: 10px 0 10px 20px; margin-top: 10px; background-color: #ffffff;">
                    <input type="file" name="fileToUpload" required> <span class="span">Please note: file size should be below than 2mb</span>
                </div>
                {!! isError($errors, 'fileToUpload') !!}
                
            </div>

           <div class="section martop30">
                <h3 class="h3">Professional details.</h3>
                <label><b>what is the position you need to apply?</b> <span class="span">*</span></label>
                <select class="select" name="positionApply" id="positionApply">
                    @foreach($positions as $position)
                    <option value="{{$position->id}}">{{$position->position}}</option>
                    @endforeach
                    
                </select>
                {!! isError($errors, 'positionApply') !!}
 
                <label><b>Previously worked company</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter the company name that you have been worked at last..." name="lastCompany" required>
                {!! isError($errors, 'lastCompany') !!}

                <label><b>Your job tittle</b> <span class="span">*</span></label>
                <input type="text" placeholder="Ex: Marketing Assistant, Software Engineer, UI/UX designer, etc..." name="lastTittle" required>
                {!! isError($errors, 'lastTittle') !!}

                <label><b>Monthly salary was</b><span class="span">*</span></label>
                <input type="text" placeholder="Ex: 25000 LKR" name="lastSalary" required>
                {!! isError($errors, 'lastSalary') !!}

                <label><b>Experience in years</b> <span class="span">*</span></label>
                <input type="text" placeholder="Ex: 2 1/2 years, etc..." name="experience" required>
                {!! isError($errors, 'experience') !!}

                <label><b>Areas you're expertise with</b><span class="span">*</span></label>
                <textarea placeholder="Ex: Sales & marketing, PHP, Laraval, Java, CSS, Jscript, Bootstrap, etc..." name="notes" rows="7" required></textarea>
                {!! isError($errors, 'notes') !!}
                
            </div>

            <div class="section martop30">
                <h3 class="h3">Account details. <span class="h3-span">(All payments will be deposited to this account)</span></h3>
                <label><b>Bank Account Number</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Account Number" name="accNumber" required>
                {!! isError($errors, 'accNumber') !!}

                <label><b>Account Holder's Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter Account holder's Name" name="accName" required>
                {!! isError($errors, 'accName') !!}

                <label><b>Bank Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter Bank Name" name="bankName" required>
                {!! isError($errors, 'bankName') !!}

                <label><b>Branch</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Branch" name="branch" required>
                {!! isError($errors, 'branch') !!}

                <input type="checkbox" name="agreement" id="agreement" required><label for="agreement">By clicking "Submit" you agree to our Terms of Use and Privacy Policy also acknowledge that data you provide are correct & accurate.</label>
                {!! isError($errors, 'agreement') !!}
            
            <div class="clearfix" style="width: 30%; padding-left: 65%; margin-top: 30px;">
                <button type="submit" class="signupbtn">Submit</button>
                <button type="button" class="cancelbtn" onclick="myFunction()">Reset</button>
            </div>

            </div>
        </div>

        <footer>
            <div>
                    <p class="p-footer">Copyright &copy; 2016-2018 @ Cybertech Int (pvt) Ltd. Powered by <a class="p-footer-a" href="http://www.cybertechint.lk" target="_blank">Cybertech Int</a> team. Your details are End to End encrypted with this form.</p>
            </div>
        </footer>
    </form>

</body>

<script>
    function myFunction() {
        document.getElementById("applicantForm").reset();
    }
</script>
<script src="/js/datatables.min.js"></script>

 <!-- toastr -->
 <script src="/js/toastr.min.js"></script>
    <script>
        @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
        @endif
    </script>

</html>
