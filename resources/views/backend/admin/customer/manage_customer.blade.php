@extends('master')

@section('title','Customer Manage')

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
                <h4 class="card-title">All Customer <span class="badge badge-info">12</span></h4>
                </p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th>Name </th>
                      <th>Company</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td> Herman Beck </td>
                      <td>Tele Consult Group </td>
                      <td> tele@gmail.com </td>
                      <td> 0187 683648 </td>
                      <td><span class="badge badge-success">Active</span></td>
                      <td>
                         <a href="{{ route('admin.customer.details')}}" class="badge badge-info">view</a>
                         <a href="" class="badge badge-success">edit</a>
                         <a href="" class="badge badge-danger">delete</a>
                       </td>
                    </tr>
                    <tr>
                      <td> 2 </td>
                      <td> Mr. MNOP </td>
                      <td>Haji Ahmed Brothers </td>
                      <td> haji@gmail.com </td>
                      <td> 0197 680148 </td>
                      <td><span class="badge badge-danger">In Active</span></td>
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
	</div>
</div>
<!-- content-wrapper ends -->
@endsection

@push('js')

@endpush