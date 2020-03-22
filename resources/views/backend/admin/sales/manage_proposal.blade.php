@extends('master')

@section('title','Manage Proposal')

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
                <h4 class="card-title">All Proposals <span class="badge badge-info">2</span></h4>
                </p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th>Subject </th>
                      <th>Type</th>
                      <th>Name</th>
                      <th>Total</th>
                      <th>Date</th>
                      <th>Open Till</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td>Need to make discussion</td>
                      <td>Customer</td>
                      <td>Mr. XYZ</td>
                      <td>5000 BDT</td>
                      <td>09-08-2020</td>
                      <td>09-08-2020</td>
                      <td><span class="badge badge-success">Draft</span></td>
                      <td>
                         <a href="{{ route('admin.customer.details')}}" class="badge badge-info">view</a>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                         <a href="" class="badge badge-dark">pdf</a>
                         <a href="" class="badge badge-primary">send to customer</a>
                         <select class="badge badge-success"><option>convert</option></select>
                       </td>
                    </tr>
                    <tr>
                      <td> 1 </td>
                      <td>Required Services</td>
                      <td>Led</td>
                      <td>Mr. XYZ</td>
                      <td>6000 BDT</td>
                      <td>09-08-2020</td>
                      <td>09-08-2020</td>
                      <td><span class="badge badge-success">Draft</span></td>
                      <td>
                         <a href="{{ route('admin.customer.details')}}" class="badge badge-info">view</a>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                         <a href="" class="badge badge-dark">pdf</a>
                         <a href="" class="badge badge-primary">send to customer</a>
                         <select class="badge badge-success"><option>convert</option></select>
                       </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
	</div>
</div>
<!-- content-wrapper ends -->
@endsection

@push('js')

@endpush