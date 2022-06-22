  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      {{-- <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a> --}}

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset('backend') }}/dist/img/excelitai.png" class="img-circle elevation-2"
                      alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">Admin Website</a>
              </div>
          </div>



          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                  <li class="nav-item">
                      <a href="{{ url('dashboard') }}"
                          class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon fas fa-list"></i>
                          <p>
                              Products
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('products') }}"
                                  class="nav-link {{ Request::is('products') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>View Products</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('add-product') }}"
                                  class="nav-link {{ Request::is('add-product') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Products</p>
                              </a>
                          </li>

                      </ul>
                  </li>
                  <li class="nav-item d-none">
                      <a href="" class="nav-link">
                          <i class="nav-icon fas fa-briefcase"></i>
                          <p>
                              Clients
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('clients') }}"
                                  class="nav-link {{ Request::is('clients') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>View Client</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('add-client') }}"
                                  class="nav-link {{ Request::is('add-client') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Clients</p>
                              </a>
                          </li>

                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Team Member
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('employees') }}"
                                  class="nav-link {{ Request::is('employees') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>View Member</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('add-member') }}"
                                  class="nav-link {{ Request::is('add-client') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Member</p>
                              </a>
                          </li>

                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('contact') }}"
                          class="nav-link {{ Request::is('contact') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-envelope-open-text"></i>
                          <p>
                              Inbox
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ url('career') }}" class="nav-link {{ Request::is('career') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-user-tie"></i>
                          <p>Career</p>
                      </a>
                  </li>
                  <li class="nav-item d-none">
                      <a href="" class="nav-link">
                          <i class="nav-icon fas fa-th"></i>
                          <p>
                              All Brand
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ url('brand') }}"
                                  class="nav-link {{ Request::is('brand') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>View Brand</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ url('add_brand') }}"
                                  class="nav-link {{ Request::is('add_brand') ? 'active' : '' }}">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add New Brand</p>
                              </a>
                          </li>

                      </ul>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
  @section('scripts')
      <script>
          $(document).ready(function() {
              (".nav-link").on("click", function() {
                  $(".nav-item a").find(".active").removeClass("active");
                  $(this).parent().addclass("active");
              })
          })
      </script>
  @endsection
