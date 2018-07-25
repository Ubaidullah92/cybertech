
<!DOCTYPE html>
<html>
    <head>
        <title>Application for candidates to register in to Cybertech Int team</title>
        <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
        <!-- my Styles -->
        <link href="{{ asset('css/mystyle.css') }}" rel="stylesheet">
    </head>
<body>
    <a href="https://www.facebook.com/cybertechInt.lk/"><img src="logo.png" style="margin-left:100px; height: 85px; width: auto; position: absolute;" /><a/>
    <h2 class="h2">Signup Form to register for Cybertech Int team</h2>
    <p class="p">Fill all below fields to complete your application. If you have arised any inconvenience please call <a class="default" href="tel:(+94)713399099">(+94) 71-33 99 099</a> or email us your details to <a class="default" href="mailto:lakshitha@teamcybertech.com">Apply@teamcybertech.com</a></p>

    <div class="notice-frame">
        <h3 class="notice-header">Vacancies available to apply!</h3>
        <div class="notice-body">

            <p class="notice-p"># Laraval Developers - <span class="notice-span">Work Online</span></p>
            <p class="notice-p"># UI Developers - <span class="notice-span">Work Online</span></p>
            <p class="notice-p"># Business Developers - <span class="notice-span">Work Online</span></p>
            <p class="notice-p"># WordPress Developers - <span class="notice-span">Work Online</span></p>
            <p class="notice-p"># React Native Developers - <span class="notice-span">Work Online</span></p>
        </div>
    </div>

    <form id="applicantForm" action="sendData.php" enctype="multipart/form-data" method="POST">
        <div class="container">
            
            <div class="section">
                <h3 class="h3">Personal details.</h3>
                <label><b>First Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your first name" name="firstName" required>

                <label><b>Last Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your last name" name="lastName" required>

                <label><b>Address</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Residence Address" name="address" required>

                <label><b>Email</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Email address" name="email" required>

                <label><b>Mobile Number</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Mobile Number" name="mobileNumber" required>

                <label><b>Date of Birth</b> <span class="span">*</span></label>
                <input type="date" placeholder="Enter your Birthday" name="birthday" required>

                <label><b>NIC Number</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your NIC Number" name="nicNumber" required>

                <label><b>Your CV</b> <span class="span">*</span></label>
                <div style="border:1px solid #ccc; padding: 10px 0 10px 20px; margin-top: 10px; background-color: #ffffff;">
                    <input type="file" placeholder="Enter your NIC Number" name="fileToUpload" required> <span class="span">Please note: file size should be below than 2mb</span>
                </div>
            </div>

            <div class="section martop30">
                <h3 class="h3">Professional details.</h3>
                <label><b>what is the position you need to apply?</b> <span class="span">*</span></label>
                <select class="select" name="positionApply" id="positionApply">
                    <option value="Laraval Developer">Laraval Developer</option>
                    <option value="UI Developer">UI Developer</option>
                    <option value="Business Developer">Business Developer</option>
                    <option value="WordPress Developer">WordPress Developer</option>
                    <option value="React Native Developer">React Native Developer</option>
                </select>

                <label><b>Previously worked company</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter the company name that you have been worked at last..." name="lastCompany" required>

                <label><b>Your job tittle</b> <span class="span">*</span></label>
                <input type="text" placeholder="Ex: Marketing Assistant, Software Engineer, UI/UX designer, etc..." name="lastTittle" required>

                <label><b>Monthly salary was</b><span class="span">*</span></label>
                <input type="text" placeholder="Ex: 25000 LKR" name="lastSalary" required>

                <label><b>Experience in years</b> <span class="span">*</span></label>
                <input type="text" placeholder="Ex: 2 1/2 years, etc..." name="experience" required>

                <label><b>Areas you're expertise with</b><span class="span">*</span></label>
                <textarea placeholder="Ex: Sales & marketing, PHP, Laraval, Java, CSS, Jscript, Bootstrap, etc..." name="notes" rows="7" required></textarea>
            </div>

            <div class="section martop30">
                <h3 class="h3">Account details. <span class="h3-span">(All payments will be deposited to this account)</span></h3>
                <label><b>Bank Account Number</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Account Number" name="accNumber" required>

                <label><b>Account Holder's Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter Account holder's Name" name="accName" required>

                <label><b>Bank Name</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter Bank Name" name="bankName" required>

                <label><b>Branch</b> <span class="span">*</span></label>
                <input type="text" placeholder="Enter your Branch" name="branch" required>

                <input type="checkbox" name="agreement" id="agreement" required><label for="agreement">By clicking "Submit" you agree to our Terms of Use and Privacy Policy also acknowledge that data you provide are correct & accurate.</label>
            
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

</html>
