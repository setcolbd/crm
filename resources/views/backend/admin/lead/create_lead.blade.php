@extends('master')

@section('title','Create Lead')

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
			        <h4 class="card-title text-center">Create Lead</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="name" class="col-sm-3 col-form-label">Name<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="name" id="name" placeholder="Name" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="company" class="col-sm-3 col-form-label">Company</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="company" name="company" placeholder="Company">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="position" class="col-sm-3 col-form-label">Position</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="position" name="position" placeholder=" Position ">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="phone" class="col-sm-3 col-form-label">Phone<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="phone" name="phone" placeholder=" Phone" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="email" class="col-sm-3 col-form-label">Email<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="email" name="email" placeholder=" Email" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="website" class="col-sm-3 col-form-label">Website</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control" id="website" name="website" placeholder=" Website">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="image" class="col-sm-3 col-form-label">Image</label>
			            <div class="col-sm-9">
			              <input type="file" class="form-control" id="image" name="image" placeholder=" Image">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="address" class="col-sm-3 col-form-label">Address<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <textarea class="form-control" id="address" name="address" required=""></textarea>
			            </div>
			          </div>
                        <p class="text-center text-bold">Lead Source</p>
			          <div class="form-group row">
			            <label for="source" class="col-sm-3 col-form-label">Source</label>
			            <div class="col-sm-9">
			              <select class="form-control" id="source" name="source">
			              	<option>Facebook</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="status" class="col-sm-3 col-form-label">Status</label>
			            <div class="col-sm-9">
			              <select class="form-control" id="status" name="status">
			              	<option>New</option>
			              	<option>Existing</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="assign_to" class="col-sm-3 col-form-label">Assign To</label>
			            <div class="col-sm-9">
			              <select class="form-control" id="assign_to" name="assign_to">
			              	<option>Select A Staff Member</option>
			              	<option>Mr. ABC</option>
			              	<option>Mr. XYZ</option>
			              	<option>Mr. JKL</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="comment" class="col-sm-3 col-form-label">Comment</label>
			            <div class="col-sm-9">
			              <textarea class="form-control" id="comment" name="comment"></textarea>
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