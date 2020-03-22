@extends('master')

@section('title','Create Staff')

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
			        <h4 class="card-title text-center">Create Staff</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="name" class="col-sm-3 col-form-label">Name<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="name" id="name" placeholder="Name" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="gender" class="col-sm-3 col-form-label">Gender</label>
			            <div class="col-sm-9">
			              <select class="form-control" id="gender" name="gender">
			              	<option>Male</option>
			              	<option>Female</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="phone" class="col-sm-3 col-form-label">Phone</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="image" class="col-sm-3 col-form-label">Image</label>
			            <div class="col-sm-9">
			              <input type="file" class="form-control" id="image" name="image" placeholder=" Image">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="address" class="col-sm-3 col-form-label">Address</label>
			            <div class="col-sm-9">
			              <textarea class="form-control" id="address" name="address"></textarea>
			            </div>
			          </div>
                      
                      <div class="form-group row">
			            <label for="member_id" class="col-sm-3 col-form-label">Member ID<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="member_id" name="member_id" placeholder=" Member ID" required="">
			            </div>
			          </div>

                       <div class="form-group row">
			            <label for="department" class="col-sm-3 col-form-label">Department<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <select class="form-control" id="department" name="department" required="">
			              	<option>IT</option>
			              	<option>Business</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="position" class="col-sm-3 col-form-label">Position</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="position" name="position" placeholder=" Position ">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="join_date" class="col-sm-3 col-form-label">Joining Date</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="join_date" name="join_date" placeholder="Joining Date">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="status" class="col-sm-3 col-form-label">Status</label>
			            <div class="col-sm-9">
			              <select class="form-control" id="status" name="status">
			              	<option>Active</option>
			              	<option>In Active</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="email" class="col-sm-3 col-form-label">Email<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="email" class="form-control" id="email" name="email" placeholder=" Email" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="password" class="col-sm-3 col-form-label">Password<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="password" name="password" placeholder=" Password" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required="">
			            </div>
			          </div>

			          <span style="margin-left:26%"><button type="submit" class="btn btn-info btn-sm">Submit</button></span>
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