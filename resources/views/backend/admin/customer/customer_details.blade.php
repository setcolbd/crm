@extends('master')

@section('title','Customer Details')

@push('css')
<style>
	.form-control{border:1px solid #b1b4b5;}
	.form-group label{margin-bottom: .1rem;}
	.req{color:red;}

	select.form-control {
    outline: 1px solid #b1b4b5;
     color: #000; 
}
</style>
@endpush

@section('content')
<div class="content-wrapper">
	    <div class="row">
		    <div class="col-md-10 offset-md-1 grid-margin stretch-card">
			    <div class="card">
			      <div class="card-body">
			      	<div class="row">
				        <div class="col-md-4">
				        <h4 class="card-title">Mr. ABC</h4>
				        <hr style="border:1px solid #3b3a39;">
				        <img src="{{ asset('crm/assets/images/faces/face1.jpg') }}" alt="profile">
				        <hr>
				        <ul class="nav">
				            <li class="nav-item nav-profile">
				              <a href="{{ route('admin.customer.details')}}" class="nav-link text-dark"><i class="mdi mdi-account-check"></i> Profile</a>
				              <a href="#" class="nav-link text-dark"><i class="mdi mdi-file-send"></i> Proposals</a>
				              <a href="#" class="nav-link text-dark"><i class="mdi mdi-file-document-box"></i> Estimates</a>
				              <a href="#" class="nav-link text-dark"><i class="mdi mdi-newspaper"></i> Invoices</a>
				              <a href="#" class="nav-link text-dark"><i class="mdi mdi-file-xml"></i> Projects</a>
				              <a href="#" class="nav-link text-dark"><i class="mdi mdi-ticket-confirmation"></i> Tickets</a>
				              <a href="#" class="nav-link text-dark"><i class="mdi mdi-phone-settings"></i> Calls</a>
				              <a href="#" class="nav-link text-dark"><i class="mdi mdi-arrow-right-bold-circle"></i> Appoinments</a>
				            </li> 
				         </ul>   	
				        </div>
				        <div class="col-md-8">
				        	<h4 class="card-title">Profile</h4>
				        	<hr style="border:1px solid #3b3a39;">
				        	<div class="table-responsive">
		                      <table class="table">
		                        <tbody>
		                          <tr>
		                            <td>Name</td>
		                            <td>Md.Nazmul Hoque</td>
		                          </tr>
		                          <tr>
		                            <td>Company</td>
		                            <td>Teleconsult Group</td>
		                          </tr>
		                          <tr>
		                            <td>Vat Numbe</td>
		                            <td>09789</td>
		                          </tr>
		                          <tr>
		                            <td>phone</td>
		                            <td>01873648</td>
		                          </tr>
		                          <tr>
		                            <td>Email</td>
		                            <td>www@gmail.com</td>
		                          </tr>
		                          <tr>
		                            <td>Website</td>
		                            <td>tcg.com.bd</td>
		                          </tr>
		                          <tr>
		                            <td>Group</td>
		                            <td>Medium Budget</td>
		                          </tr>
		                          <tr>
		                            <td>Status</td>
		                            <td>Active</td>
		                          </tr>
		                          <tr>
		                            <td>Comments</td>
		                            <td>Comments Gors Here</td>
		                          </tr>
		                          <tr>
		                            <td>Address</td>
		                            <td>Address Gors Here</td>
		                          </tr>
		                          <tr>
		                            <td>Billing Address</td>
		                            <td>Billing Address Gors Here</td>
		                          </tr>
		                          <tr>
		                            <td>Shipping Address</td>
		                            <td>Shipping Address Gors Here</td>
		                          </tr>
		                        </tbody>
		                      </table>
		                    </div>
				        </div>
			      	</div>
			      </div>
			    </div>
		  </div>
	    </div>
</div>
<!-- content-wrapper ends -->
@endsection

@push('js')

@endpush