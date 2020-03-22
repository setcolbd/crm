<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="{{ route('dashboard')}}" class="nav-link">
                <div class="nav-profile-image">
                  <img src="{{ asset('crm/assets/images/faces/face1.jpg') }}" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">{{ Auth::user()->name }}</span>
                  <span class="text-secondary text-small">Project Manager</span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard')}}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon text-dark"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#lead" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Leads</span>
                <i class="menu-arrow text-dark"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon text-dark"></i>
              </a>
              <div class="collapse" id="lead">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.create')}}">Create Lead</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.manage')}}">Manage Leads</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.history.create')}}">Create Call History </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.call.history')}}">Call History</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.create.appointment')}}">Create Appoinments</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.appointment.info')}}">Appoinment Info</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.create.note')}}">Create Notes</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.lead.note.info')}}">Notes Info</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#customers" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Customers</span>
                <i class="menu-arrow text-dark"></i>
                <i class="mdi mdi-account menu-icon text-dark"></i>
              </a>
              <div class="collapse" id="customers">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.create.customer')}}">Create Customer</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.manage')}}">Manage Customer</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.call.history.create')}}">Create Call History</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.call.history')}}">Call History</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.create.appointment')}}">Create Appoinment</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.appointment.info')}}">Appoinment Info</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.create.note')}}">Create Note</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.customer.note.info')}}">Notes Info</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#sales" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Sales</span>
                <i class="menu-arrow text-dark"></i>
                <i class="mdi mdi-sale menu-icon text-dark"></i>
              </a>
              <div class="collapse" id="sales">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.create.proposal')}}">Create Proposals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.manage.proposal')}}">Manage Proposals</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.create.estimate')}}">Create Estimates</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.manage.estimate')}}">Manage Estimates </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.create.invoice')}}">Create Invoices</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.manage.invoice')}}">Manage Invoice </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.create.item')}}">Create Items</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.manage.item')}}">Manage Items</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.create.tax')}}">Create Tax</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.sales.manage.tax')}}">Manage Tax</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#project" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Project</span>
                <i class="menu-arrow text-dark"></i>
                <i class="mdi mdi-assistant menu-icon text-dark"></i>
              </a>
              <div class="collapse" id="project">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.create.project')}}">Create Project</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.manage.project')}}">Manage Project</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.create.task')}}">Create Task</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.manage.task')}}">Manage Task</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#support" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Support</span>
                <i class="menu-arrow text-dark"></i>
                <i class="mdi mdi-format-list-bulleted menu-icon text-dark"></i>
              </a>
              <div class="collapse" id="support">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.create.ticket')}}">Create Ticket</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.manage.ticket')}}">Manage Ticket</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#report" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Reports</span>
                <i class="menu-arrow text-dark"></i>
                <i class="mdi mdi-chart-bar menu-icon text-dark"></i>
              </a>
              <div class="collapse" id="report">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.report.proposal')}}">Proposals Report</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.report.estimate')}}">Estimate Report</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.report.invoice')}}">Invoice Report</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#staff" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Staff</span>
                <i class="menu-arrow text-dark"></i>
                <i class="mdi mdi-chart-bar menu-icon text-dark"></i>
              </a>
              <div class="collapse" id="staff">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.create.department')}}">Create Department</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.manage.department')}}">Manage Department</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.create.staff')}}">Create Staff</a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('admin.manage.staff')}}">Manage Staff</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.password')}}">
                <span class="menu-title">Settings</span>
                <i style="color:#000;" class="mdi mdi-cached mr-2 menu-icon"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                <span class="menu-title">Signout</span>
                <i style="color:#000;" class="mdi mdi-logout mr-2 menu-icon"></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
               @csrf
              </form>
                  
            </li>

          </ul>
        </nav>