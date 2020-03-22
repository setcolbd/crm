@extends('master')

@section('title','Create Item')

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
			        <h4 class="card-title text-center">Create Item</h4>
			        <form class="forms-sample">

			          <div class="form-group row">
			            <label for="name" class="col-sm-2 col-form-label">Name<span class="req">*</span></label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control form-control-sm" id="name" name="Name" placeholder="Name" required="">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="description" class="col-sm-2 col-form-label">Description</label>
			            <div class="col-sm-10">
			              <textarea rows="5" class="form-control" id="description" name="description"></textarea>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="price" class="col-sm-2 col-form-label">Price</label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control form-control-sm" id="price" name="price" placeholder="Price">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="tax" class="col-sm-2 col-form-label">Tax</label>
			            <div class="col-sm-10">
			              <select class="form-control form-control-sm" id="tax" name="tax">
			              	<option>No Tax</option>
			              	<option>GSTN(10%)</option>
			              	<option>SGST(2%)</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="item_group" class="col-sm-2 col-form-label">Item Group</label>
			            <div class="col-sm-10">
			              <select class="form-control form-control-sm" id="item_group" name="item_group">
			              	<option>Select A Group</option>
			              	<option>Mobile</option>
			              	<option>Laptop</option>
			              </select>
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