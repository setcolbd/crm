@extends('master')

@section('title','Create Lead History')

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
			        <h4 class="card-title text-center">Create Lead Call History</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="source" class="col-sm-2 col-form-label">To Lead<span class="req">*</span></label>
			            <div class="col-sm-10">
			              <select class="form-control" id="source" name="source">
			              	<option>Select A Lead</option>
			              	<option>XXXX</option>
			              	<option>YYYYY</option>
			              	<option>ZZZZZZ</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="date" class="col-sm-2 col-form-label">Date<span class="req">*</span></label>
			            <div class="col-sm-4">
			              <input type="date" class="form-control" id="date" name="date" placeholder="Date">
			            </div>
			            <label for="time" class="col-sm-2 col-form-label">Time</label>
			            <div class="col-sm-4">
			              <input type="time" class="form-control" id="time" name="time" placeholder="Time">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="description" class="col-sm-2 col-form-label">Description</label>
			            <div class="col-sm-10">
			              <textarea rows="5" class="form-control" id="description" name="description"></textarea>
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