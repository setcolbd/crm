@extends('master')

@section('title','Create Task')

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
			        <h4 class="card-title text-center">Create Task</h4>
			        <form class="forms-sample">

			          <div class="form-group row">
			            <label for="project" class="col-sm-3 col-form-label text-right">Project<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="project" name="project" required="">
			              	<option>Select A Project</option>
			              	<option>Demo</option>
			              	<option>Test</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="title" class="col-sm-3 col-form-label text-right">Title<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="title" name="title" placeholder=" Title" required="">
			            </div>
			          </div>
			          
			          <div class="form-group row">
			            <label for="priority" class="col-sm-3 col-form-label text-right">Priority</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="priority" name="priority">
			              	<option>medium</option>
			              	<option>Normal</option>
			              	<option>ASAP</option>
			              </select>
			            </div>
			          </div>
			          
			          <div class="form-group row">
			            <label for="description" class="col-sm-3 col-form-label text-right">Description</label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="description" name="description"></textarea>
			            </div>
			          </div>
			          
			          <div class="form-group row">
			            <label for="title" class="col-sm-3 col-form-label text-right">File</label>
			            <div class="col-sm-9">
			              <input type="file" class="form-control form-control-sm" id="file" name="file" placeholder=" File">
			            </div>
			          </div> 

			          <div class="form-group row">
			            <label for="status" class="col-sm-3 col-form-label text-right">Status</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="status" name="status">
			              	<option>Pending</option>
			              	<option>Completed</option>
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