@extends('master')

@section('title','Sales-Manage Estimate')

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
                <h4 class="card-title">All Staff <span class="badge badge-info">2</span></h4>
                </p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th>Name </th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Department</th>
                      <th>Position</th>
                      <th>status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td>Mr. BVUI</td>
                      <td>0979787</td>
                      <td>but@gmail.com</td>
                      <td>IT</td>
                      <td>Programmer</td>
                      <td>Active</td>
                      <td>
                         <a href="" class="badge badge-info">view</a>
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