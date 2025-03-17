<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="https://static.wixstatic.com/media/e0c703_9854009275a8451b820378911980dcd9~mv2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Setara Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('admin.dashboard')}}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('userList.index')}}" class="nav-link {{ Request::is('admin/user-list') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manage User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-building"></i>
              <p>
                Companies
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('companies.index')}}" class="nav-link {{ Request::is('admin/companies') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Companies List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('companies.create')}}" class="nav-link {{ Request::is('admin/companies/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Company</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('excelBulkUpload')}}" class="nav-link {{ Request::is('admin/companies/excel/bulk/upload') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Companies</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">HRD SECTION</li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-nurse"></i>
              <p>
                Employees
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employees.index')}}" class="nav-link {{ Request::is('admin/employees-list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employees List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employees.create')}}" class="nav-link {{ Request::is('admin/employees-list/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Employee</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employees.historyIndex')}}" class="nav-link {{ Request::is('admin/employees-list/history/data') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Employees History</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('excelEmployeeBulkUpload')}}" class="nav-link {{ Request::is('admin/employees/excel/bulk/upload') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Import Employees</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-calendar"></i>
              <p>
                Leave Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employees.index')}}" class="nav-link {{ Request::is('admin/employees-list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Leave List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employees.create')}}" class="nav-link {{ Request::is('admin/employees-list/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Leave</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                <i class="nav-icon fas fa-campground"></i>
              <p>
                Gatepass Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employees.index')}}" class="nav-link {{ Request::is('admin/employees-list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Gatepass List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('employees.create')}}" class="nav-link {{ Request::is('admin/employees-list/create') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Gatepass</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">COMPLIANCE SECTION</li>
          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cube"></i>
              <p>
                Compliance System
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('employees.index')}}" class="nav-link {{ Request::is('admin/employees-list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compliance Ruls</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-header">APPLICATION SETTING</li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setting
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('settingHome')}}" class="nav-link {{ Request::is('admin/setting/home') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('settingUserdashboard')}}" class="nav-link {{ Request::is('admin/setting/user-dashboard') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('settingThemeCustomization')}}" class="nav-link {{ Request::is('admin/setting/theme/customization') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Theme Customization</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('requirdImport.company')}}" class="nav-link {{ Request::is('admin/setting/theme/customization') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Required Import For Company</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="#" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Require System Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('jobDesignation.index')}}" class="nav-link {{ Request::is('admin/job-designation/data/list') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Job Designation</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('exportableProduct.index')}}" class="nav-link {{ Request::is('admin/exportable-product/data/list') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Exportable Product</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('factoryCertification.index')}}" class="nav-link {{ Request::is('admin/factory-certification/data/list') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Factory Certification</p>
                  </a>
                </li>
              <li class="nav-item">
                <a href="{{route('factoryType.index')}}" class="nav-link {{ Request::is('admin/factory-type/data/list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Facctory Type</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('priority.index')}}" class="nav-link {{ Request::is('/priority/data/list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Priority</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('factoryZone.index')}}" class="nav-link {{ Request::is('admin/factory-zone/data/list') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Factory Zone</p>
                </a>
              </li>
            </ul>
          </li>



          <li class="nav-item">
            <a href="{{route('settingPayment')}}" class="nav-link {{ Request::is('admin/setting/payment') ? 'active' : '' }}">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>Payment Option</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
