@extends('master')

@section('title','Create Note')

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
			        <h4 class="card-title text-center">Create Notes</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="lead" class="col-sm-3 col-form-label">Customer<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <select class="form-control" id="lead" name="lead">
			              	<option>Select A Customer</option>
			              	<option>XXXX</option>
			              	<option>YYYYY</option>
			              	<option>ZZZZZZ</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="note" class="col-sm-3 col-form-label">Notes<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <textarea rows="5" class="form-control" id="note" name="note"></textarea>
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