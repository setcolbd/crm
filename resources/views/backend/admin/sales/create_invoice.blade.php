@extends('master')

@section('title','Create Invoice')

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
			        <h4 class="card-title text-center">Create Invoice</h4>
			        <form class="forms-sample">
			          <div class="form-group row">
			            <label for="customer" class="col-sm-2 col-form-label text-right">Customer<span class="req">*</span></label>
			            <div class="col-sm-10">
			              <select class="form-control form-control-sm" id="customer" name="customer" required="">
			              	<option>Select A Customer</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="bill_to" class="col-sm-2 col-form-label text-right">Bill To</label>
			            <div class="col-sm-4">
			              <textarea class="form-control form-control-sm" id="bill_to" name="bill_to"></textarea>
			            </div>
			            <label for="ship_to" class="col-sm-2 col-form-label text-right">Ship To</label>
			            <div class="col-sm-4">
			              <textarea class="form-control form-control-sm" id="ship_to" name="ship_to"></textarea>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="reference" class="col-sm-2 col-form-label text-right">Reference</label>
			            <div class="col-sm-10">
			              <input type="text" class="form-control form-control-sm" id="reference" name="reference" placeholder=" Reference">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="invoice_date" class="col-sm-2 col-form-label text-right">Invoice Date<span class="req">*</span></label>
			            <div class="col-sm-4">
			              <input type="date" class="form-control form-control-sm" id="invoice_date" name="invoice_date" placeholder=" Invoice Date" required="">
			            </div>
			            <label for="due_date" class="col-sm-2 col-form-label text-right">Due Date</label>
			            <div class="col-sm-4">
			              <input type="date" class="form-control form-control-sm" id="due_date" name="due_date" placeholder="Due Date">
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="staff" class="col-sm-2 col-form-label text-right">Staff Member</label>
			            <div class="col-sm-4">
			              <select class="form-control form-control-sm" id="staff" name="staff">
			              	<option>Select</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			            <label for="status" class="col-sm-2 col-form-label text-right">Status</label>
			            <div class="col-sm-4">
			              <select class="form-control form-control-sm" id="status" name="status">
			              	<option>Draft</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="project" class="col-sm-2 col-form-label text-right">Project</label>
			            <div class="col-sm-4">
			              <select class="form-control form-control-sm" id="project" name="project">
			              	<option>Select Project</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			            <label for="task" class="col-sm-2 col-form-label text-right">Task</label>
			            <div class="col-sm-4">
			              <select class="form-control form-control-sm" id="task" name="task">
			              	<option>Select Task</option>
			              	<option>Google</option>
			              	<option>Linkedin</option>
			              	<option>Others</option>
			              </select>
			            </div>
			          </div>

			          <div class="form-group row">
			            <label for="admin_note" class="col-sm-2 col-form-label text-right">Admin Note</label>
			            <div class="col-sm-10">
			              <textarea class="form-control form-control-sm" id="admin_note" name="admin_note"></textarea>
			            </div>
			          </div>
			          <p class="text-bold text-center">Invoice Details</p>
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
			          <span style="margin-left:46%"><button type="submit" class="btn btn-info btn-sm">Calculate</button></span>
                        <hr>
                        <div class="row">
                           <div class="form-group col-sm-7">
                           	<h4 class="card-title text-center">Extra Details</h4>
			          	      <div class="form-group row">
					            <label for="client_note" class="col-sm-3 col-form-label text-right">Client Note</label>
					            <div class="col-sm-9">
					              <textarea class="form-control form-control-sm" rows="3" id="client_note" name="client_note"></textarea>
					            </div>					            
					          </div>
					          <div class="form-group row">
					          	<label for="terms_condition" class="col-sm-3 col-form-label text-right">Terms && Condition</label>
					            <div class="col-sm-9">
					              <textarea class="form-control form-control-sm" rows="3" id="terms_condition" name="terms_condition"></textarea>
					            </div>
					          </div>	
					          
			              </div>
				          <div class="form-group row col-sm-5">
				          	<table class="table">
				          		<tr>
				          			<td>Sub Total</td>
				          			<td></td>
				          			<td>BDT: 345,6790</td>
				          		</tr>
				          		<tr>
				          			<td>Discount(%)</td>
				          			<td><input type="text" name="discount"></td>
				          			<td>BDT: 0.00</td>
				          		</tr>
				          		<tr>
				          			<td>Adjustment</td>
				          			<td><input type="text" name="adjustment"></td>
				          			<td>BDT: 0.00</td>
				          		</tr>
				          		<tr>
				          			<td>Total</td>
				          			<td></td>
				          			<td>BDT: 345,6790</td>
				          		</tr>
				          	</table>
				          </div>
                        </div>
			          

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