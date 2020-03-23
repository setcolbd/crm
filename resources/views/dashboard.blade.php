@extends('master')

@section('title','Dashboard')

@push('css')

@endpush

@section('content')
  <div class="content-wrapper">

    <div class="row" id="proBanner" style="display:none;">
      <div class="col-12">
        <span class="d-flex align-items-center purchase-popup">
          <i class="mdi mdi-close" id="bannerClose"></i>
        </span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('crm/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Weekly Sales <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">25,0000 BDT</h2>
            <h6 class="card-text">Increased by 20%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('crm/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Weekly Orders <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">1020</h2>
            <h6 class="card-text">Increased by 5%</h6>
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{ asset('crm/assets/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Visitors Online <i class="mdi mdi-diamond mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">95,5741</h2>
            <h6 class="card-text">Increased by 5%</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="clearfix">
              <h4 class="card-title float-left">Sales Statistics</h4>
              <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
            </div>
            <canvas id="visit-sale-chart" class="mt-4"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Traffic Sources</h4>
            <canvas id="traffic-chart"></canvas>
            <div id="traffic-chart-legend" class="rounded-legend legend-vertical legend-bottom-left pt-4"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-3 grid-margin">
        <div class="card">
            <span class="nav-link">
                <button class="btn btn-block btn-lg btn-gradient-primary mt-4">TOTAL SALE <br> 1350 +</button>
            </span>
            <span class="nav-link">
                <button class="btn btn-block btn-lg btn-gradient-info mt-4">TOTAL CUSTOMER <br> 300 +</button>
            </span>
            <span class="nav-link">
                <button class="btn btn-block btn-lg btn-gradient-danger mt-4">TOTAL LEAD <br> 200 +</button>
            </span>
            <span class="nav-link">
                <button class="btn btn-block btn-lg btn-gradient-dark mt-4">TOTAL PROJECT <br> 160 +</button>
            </span>
        </div>
      </div>
      <div class="col-9 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Top 5 Customers</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Name </th>
                    <th> Company </th>
                    <th> Email </th>
                    <th> Phone </th>
                    <th> Status </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Md.Kiron Mahmud </td>
                    <td> isolation BD </td>
                    <td> mahmud@gmail.com </td>
                    <td> 0178747563</td>
                    <td><label class="badge badge-gradient-success">Active</label></td>
                  </tr>
                  <tr>
                    <td> Md.Hasan Al Din </td>
                    <td> Teleconsult Group </td>
                    <td> tele@gmail.com </td>
                    <td> 0178747563</td>
                    <td><label class="badge badge-gradient-success">Active</label></td>
                  </tr>
                  <tr>
                    <td> Nazmul Hoque </td>
                    <td> RDX Group </td>
                    <td> rdx@gmail.com </td>
                    <td> 0178747563</td>
                    <td><label class="badge badge-gradient-success">Active</label></td>
                  </tr>
                  <tr>
                    <td> Md.Al Amin Hossian </td>
                    <td> Teleconsult Group </td>
                    <td> alaim@gmail.com </td>
                    <td> 0178747563</td>
                    <td><label class="badge badge-gradient-success">Active</label></td>
                  </tr>
                  <tr>
                    <td> Golam Kibria Shohag </td>
                    <td> Sisters Engineering </td>
                    <td> sisters@gmail.com </td>
                    <td> 0178747563</td>
                    <td><label class="badge badge-gradient-success">Active</label></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Latest 5 Project Status</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Project Name </th>
                    <th> Start Date </th>
                    <th> Due Date </th>
                    <th> Progress </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Covid-19 Info</td>
                    <td> Mar 25, 2020 </td>
                    <td> Apr 25, 2020 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> Meghna Bridge</td>
                    <td> jan 01, 2020 </td>
                    <td> jan 30, 2023 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 54%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Asia Cup 2020 </td>
                    <td> Sep 25, 2020 </td>
                    <td> OCt 18, 2020 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 33%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td> PPI 20000</td>
                    <td> Mar 25, 2020 </td>
                    <td> Apr 02, 2020 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 93%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>Metro Rail</td>
                    <td> jan 01, 2017 </td>
                    <td> Dec 30, 2021 </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 74%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-white">Todo</h4>
            <div class="add-items d-flex">
              <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
              <button class="add btn btn-gradient-primary font-weight-bold todo-list-add-btn" id="add-task">Add</button>
            </div>
            <div class="list-wrapper">
              <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Complete The Task ASAP </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Create Invoice Last 5 Orders </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Delever The Product Before 5 pm </label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox"> Arrange Metting</label>
                  </div>
                  <i class="remove mdi mdi-close-circle-outline"></i>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- content-wrapper ends -->
@endsection

@push('js')
    <!-- Custom js for this page -->
    <script src="{{ asset('crm/assets/js/dashboard.js') }}"></script>
    <script src="{{ asset('crm/assets/js/todolist.js') }}"></script>
    <!-- End custom js for this page -->
@endpush