@extends('master')

@section('title','Manage Items')

@push('css')

@endpush

@section('content')
<div class="content-wrapper">
	<div class="row">
		<div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">All Items <span class="badge badge-info">2</span></h4>
                </p>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th> # </th>
                      <th>Name </th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Tax</th>
                      <th>Group</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td> 1 </td>
                      <td>Huawei Y9</td>
                      <td>From Huawei Team</td>
                      <td>19,000 BDT</td>
                      <td>10%</td>
                      <td>Mobile</td>
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