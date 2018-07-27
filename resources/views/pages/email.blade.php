<h2> Students Detials</h2>
    <div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-striped table-header">
				<tbody>
                        <tr><th>First Name: </th> <td>{{$applicant->first_name}}</td></tr>
                        <tr><th>Last Name: </th> <td>{{$applicant->last_name}}</td></tr>
                        <tr><th>Address: </th> <td>{{$applicant->address}}</td></tr>
                        <tr><th>Email: </th> <td>{{$applicant->email}}</td></tr>
                        <tr><th>Mobile Number: </th> <td>{{$applicant->mobile}}</td></tr>
                        <tr><th>Date of Birth: </th> <td>{{$applicant->dob}}</td></tr>
                        <tr><th>NIC Number: </th> <td>{{$applicant->nic_no}}</td></tr>
                        <tr><th>Applied Position: </th> <td>{{$applicant->position}}</td></tr>
                        <tr><th>Previously worked company: </th> <td>{{$applicant->last_company}}</td></tr>
                        <tr><th>Your job tittle: </th> <td>{{$applicant->last_tittle}}</td></tr>
                        <tr><th>Monthly salary was: </th> <td>{{$applicant->last_salary}}</td></tr>
                        <tr><th>Experience in years: </th> <td>{{$applicant->experience}}</td></tr>
                        <tr><th>Areas you're expertise with: </th> <td>{{$applicant->notes}}</td></tr>
                        <tr><th>Bank Account Number: </th> <td>{{$applicant->account_no}}</td></tr>
                        <tr><th>Account Holder's Name: </th> <td>{{$applicant->account_name}}</td></tr>
                        <tr><th>Bank Name: </th> <td>{{$applicant->bank}}</td></tr>
                        <tr><th>Branch: </th> <td>{{$applicant->branch}}</td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>