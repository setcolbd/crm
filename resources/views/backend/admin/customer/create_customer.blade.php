@extends('master')

@section('title','Create Customer')

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
			        <h4 class="card-title text-center">Create Customer</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="name" class="col-sm-3 col-form-label">Name<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="name" id="name" placeholder="Name" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="company" class="col-sm-3 col-form-label">Company</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="company" name="company" placeholder="Company">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="vat_number" class="col-sm-3 col-form-label">Vat Number</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="vat_number" name="vat_number" placeholder=" Vat Number ">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="phone" class="col-sm-3 col-form-label">Phone<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="phone" name="phone" placeholder=" Phone" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="website" class="col-sm-3 col-form-label">Website</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="website" name="website" placeholder=" Website">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="group" class="col-sm-3 col-form-label">Group</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="group" name="group">
			              	<option>Facebook</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="customer_address" class="col-sm-3 col-form-label">Customer Address<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="customer_address" name="customer_address" required=""></textarea>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="billing_address" class="col-sm-3 col-form-label">Billing Address<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="billing_address" name="billing_address" required=""></textarea>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="shipping_address" class="col-sm-3 col-form-label">Shipping Address<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="shipping_address" name="shipping_address" required=""></textarea>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="email" class="col-sm-3 col-form-label">Email<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder=" Email" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="password" class="col-sm-3 col-form-label">Password<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="password" class="form-control form-control-sm" id="password" name="password" placeholder=" Password" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <div class="form-check form-check-info col-sm-9 offset-sm-3">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"> Send Notification To Customer
                            </label>
                        </div>
			          </div>
			          <div class="form-group row">
			            <label for="comment" class="col-sm-3 col-form-label">Comment</label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="comment" name="comment"></textarea>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="status" class="col-sm-3 col-form-label">Status</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="status" name="status">
			              	<option>Active</option>
			              	<option>In Active</option>
			              </select>
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