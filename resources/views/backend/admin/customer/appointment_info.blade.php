@extends('master')

@section('title','Appointment Info')

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
                <h4 class="card-title">All appointments <span class="badge badge-info">12</span></h4>
                </p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th>Customer </th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Appointment With</th>
                      <th>Description</th>
                      <th>Action </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td> Herman Beck </td>
                      <td>09-03-2020 </td>
                      <td>13.20</td>
                      <td> Mr. ABC </td>
                      <td>Description</td>
                      <td>
                         <a href="" class="badge badge-gradient-info">view</a>
                         <a href="" class="badge badge-gradient-success">edit</a>
                         <a href="" class="badge badge-gradient-danger">delete</a>
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