@extends('master')

@section('title','Estimate Reports')

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
		<div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
              	<form  action="#">
              		<div class="form-group row">
			            <label for="from_date" class="col-sm-2 col-form-label text-right">From Date</label>
			            <div class="col-sm-3">
			              <input type="date" class="form-control form-control-sm" id="from_date" name="from_date" required="">
			            </div>

			            <label for="to_date" class="col-sm-2 col-form-label text-right">To Date</label>
			            <div class="col-sm-3">
			              <input type="date" class="form-control form-control-sm" id="to_date" name="to_date" required="">
			            </div>
                        
                        <div class="col-sm-2">
			              <button type="submit" class="btn btn-info" id="search">Search</button>
			            </div>

			        </div>
              	</form>
              </div>
            </div>
        </div>
	</div>
<!-- 	<div class="row report">
		<div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">All Estimate <span class="badge badge-info">2</span></h4>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th>Customer </th>
                      <th>Project</th>
                      <th>Date</th>
                      <th>Expiry Date</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td>Mr. BVUI</td>
                      <td>Demo</td>
                      <td>09-09-2019</td>
                      <td>09-08-2020</td>
                      <td>5000 BDT</td>
                      <td>Pending</td>
                      <td>
                         <a href="{{ route('admin.customer.details')}}" class="badge badge-info">view</a>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                       </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
        </div>
	</div> -->
</div>
<!-- content-wrapper ends -->
@endsection

@push('js')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.report').hide();
		('#search').click(function(){
           $('.report').show();
		});
	})
</script> -->
@endpush