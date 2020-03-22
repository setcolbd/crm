@extends('master')

@section('title','Create Tax')

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
			        <h4 class="card-title text-center">Create Tax</h4>
			        <form class="forms-sample">

			          <div class="form-group row">
			            <label for="name" class="col-sm-2 col-form-label">Name<span class="req">*</span></label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control form-control-sm" id="name" name="Name" placeholder="Name" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="tax" class="col-sm-2 col-form-label">Tax(%)<span class="req">*</span></label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control form-control-sm" id="tax" name="tax" placeholder="%" required="">
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