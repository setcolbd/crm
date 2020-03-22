@extends('master')

@section('title','Create Project')

@push('css')
<style>
	.form-control{border:1px solid #b1b4b5;}
	.form-group label{margin-bottom: 0.009rem;}
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
			        <h4 class="card-title text-center">Create Project</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="name" class="col-sm-3 col-form-label text-right">Project Name<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="name" id="name" placeholder="Name" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="customer" class="col-sm-3 col-form-label text-right">Customer<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="customer" name="customer" required="">
			              	<option>Select A Customer</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="start_date" class="col-sm-3 col-form-label text-right">Start Date<span class="req">*</span></label>
			            <div class="col-sm-3">
			              <input type="date" class="form-control form-control-sm" id="start_date" name="start_date" placeholder="Start Date" required="">
			            </div>
			            <label for="due_date" class="col-sm-3 col-form-label text-right">Due Date</label>
			            <div class="col-sm-3">
			              <input type="date" class="form-control form-control-sm" id="due_date" name="due_date" placeholder="Due Date">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="description" class="col-sm-3 col-form-label text-right">Description</label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="description" name="description"></textarea>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="phone" class="col-sm-3 col-form-label text-right">Total Cost (BDT)</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="total_cost" name="total_cost" placeholder=" Total Cost" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="estimated_hour" class="col-sm-3 col-form-label text-right">Estimated Hours</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="estimated_hour" name="estimated_hour" placeholder=" Estimated Hours">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="assign_to_staff" class="col-sm-3 col-form-label text-right">Assigned To Staff</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="assign_to_staff" name="assign_to_staff">
			              	<option>Admin</option>
			              	<option>User</option>
			              	<option>Mr.ABC</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>
			          
			          <div class="form-group row">
			            <label for="status" class="col-sm-3 col-form-label text-right">Status</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="status" name="status">
			              	<option>In Prograss</option>
			              	<option>In Active</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <div class="form-check form-check-info col-sm-9 offset-sm-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"> Send Notification To Customer
                            </label>
                        </div>
                        <div class="form-check form-check-info col-sm-9 offset-sm-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"> Send Notification To Staff
                            </label>
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