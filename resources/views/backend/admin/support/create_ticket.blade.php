@extends('master')

@section('title','Create Ticket')

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
			        <h4 class="card-title text-center">Create Ticket</h4>
			        <form class="forms-sample">

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
			            <label for="priority" class="col-sm-3 col-form-label text-right">Priority</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="priority" name="priority" required="">
			              	<option>medium</option>
			              	<option>Normal</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="department" class="col-sm-3 col-form-label text-right">Department</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="department" name="department" required="">
			              	<option>Select A Department</option>
			              	<option>It</option>
			              	<option>Business</option>
			              </select>
			            </div>
			          </div>
                      
                      <div class="form-group row">
			            <label for="subject" class="col-sm-3 col-form-label text-right">Subject<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="subject" name="subject" placeholder=" Total Cost" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="description" class="col-sm-3 col-form-label text-right">Description</label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="description" name="description"></textarea>
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