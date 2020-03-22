@extends('master')

@section('title','Create Proposal')

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
		    <div class="col-md-12 grid-margin stretch-card">
			    <div class="card">
			      <div class="card-body">
			        <h4 class="card-title text-center">Create Proposal</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="subject" class="col-sm-3 col-form-label text-right">Subject<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="name" id="subject" placeholder="Name" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="group" class="col-sm-3 col-form-label text-right">Related<span class="req">*</span></label>
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
			            <label for="company" class="col-sm-3 col-form-label text-right">Date<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="date" class="form-control form-control-sm" id="company" name="company" placeholder="Company">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="vat_number" class="col-sm-3 col-form-label text-right">Open Till</label>
			            <div class="col-sm-9">
			              <input type="date" class="form-control form-control-sm" id="vat_number" name="vat_number" placeholder=" Vat Number ">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="group" class="col-sm-3 col-form-label text-right">Status</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="group" name="group">
			              	<option>Draft</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="group" class="col-sm-3 col-form-label text-right">Assigned</label>
			            <div class="col-sm-9">
			              <select class="form-control form-control-sm" id="group" name="group">
			              	<option>Select A Staff Member</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="email" class="col-sm-3 col-form-label text-right">Phone</label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder=" Email" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="email" class="col-sm-3 col-form-label text-right">Email<span class="req">*</span></label>
			            <div class="col-sm-9">
			              <input type="text" class="form-control form-control-sm" id="email" name="email" placeholder=" Email" required="">
			            </div>
			          </div>
			          <div class="form-group row">
			            <label for="shipping_address" class="col-sm-3 col-form-label text-right">Address</label>
			            <div class="col-sm-9">
			              <textarea class="form-control form-control-sm" id="shipping_address" name="shipping_address" required=""></textarea>
			            </div>
			          </div>
			          <p class="text-bold text-center">Proposal Details</p>
			          <div class="form-group row">
			            <label for="group" class="col-sm-2 offset-md-3 col-form-label text-right">Add Item</label>
			            <div class="col-sm-4">
			              <select class="form-control form-control-sm" id="group" name="group">
			              	<option>Select an Item</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>
			          <div class="form-group row">
			            <table class="table">
			            	<thead>
			            		<tr>
			            			<th style="width:18% ;text-align:center;">Item</th>
				            		<th style="width:18% ;text-align:center;">Description</th>
				            		<th style="width:10% ;text-align:center;">Quantity</th>
				            		<th style="width:10% ;text-align:center;">Rate</th>
				            		<th style="width:10% ;text-align:center;">Tax</th>
				            		<th style="width:10% ;text-align:center;">Amount</th>
				            		<th style="width:4% ;text-align:center;"><i class="mdi mdi-settings"></i></th>
			            		</tr>
			            		
			            	</thead>
			            	<tbody>
			            		<tr>
			            			<td><textarea class="form-control form-control-sm" placeholder="Item"></textarea></td>
			            			<td><textarea class="form-control form-control-sm" placeholder="Description"></textarea></td>
			            			<td><input type="number" class="form-control form-control-sm" name="quqntity"></td>
			            			<td><input type="text" class="form-control form-control-sm" name="rate"></td>
			            			<td><select class="form-control form-control-sm">
			            				<option>No Tax</option>
			            			</select></td>
			            			<td><input type="number" class="form-control form-control-sm" name="amount"></td>
			            			<td><span class="badge badge-info"><i class="mdi mdi-plus"></i></span></td>
			            		</tr>

			            	</tbody>
			            </table>
			          </div>
			          <span style="margin-left:46%"><button type="submit" class="btn btn-info btn-sm">Submit</button></span>
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