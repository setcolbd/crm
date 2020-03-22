@extends('master')

@section('title','Update Password')

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
	<div class="page-header">
	  <!-- <h3 class="page-title"> Create Lead History</h3> -->
	</div>
	    <div class="row">
		  <div class="col-md-10 offset-md-1 grid-margin stretch-card">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title text-center">Update Password</h4>
			        <form class="forms-sample">

                      <div class="form-group row">
			            <label for="old_password" class="col-sm-3 col-form-label text-right">Old Password<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="password" class="form-control form-control-lg" id="old_password" name="old_password" placeholder="Old Password" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="new_password" class="col-sm-3 col-form-label text-right">New Password<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="password" class="form-control form-control-lg" id="new_password" name="new_password" placeholder="New Password" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="confirm_new_password" class="col-sm-3 col-form-label text-right">Confirm New Password<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="password" class="form-control form-control-lg" id="confirm_new_password" name="confirm_new_password" placeholder="Confirm New Password" required="">
			            </div>
			          </div>

			          <span style="margin-left:17%"><button type="submit" class="btn btn-info btn-sm">Submit</button></span>
			        </form>
			      </div>
			    </div>
		    </div>
	    </div>
</div>
<!-- content-wrapper ends -->
@endsection

@push('js')

@endpush