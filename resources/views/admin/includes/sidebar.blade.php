<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.main.index') }}" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Jundevs Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('admin.user.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.project.index') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Projects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.vacancy.index') }}" class="nav-link">
              <i class="nav-icon fas fa-sticky-note"></i>
              <p>
                Vacancies
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.language.index') }}" class="nav-link">
              <i class="nav-icon fas fa-th-list"></i>
              <p>
                Languages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.skill.index') }}" class="nav-link">
              <i class="nav-icon fas fa-tags"></i>
              <p>
                Skills
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>