  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light justify-content-between">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{-- route('admin.main.index') --}}" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        <form action="{{-- route('logout') --}}" method="POST">
          @csrf
          <button type="submit" class="btn btn-default">Logout</button>
        </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->