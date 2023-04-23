<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{ route('main.index') }}" class="brand-link">
    <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
      class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Магазинчик</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}"
          class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Eugen Bazhenov</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search"
          placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"
        role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon far fa-clipboard"></i>
            <p>
              Заказы
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fas fa-boxes"></i>
            <p>
              Товары
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('category.index') }}" class="nav-link">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
              Категории
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('tag.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>
              Теги
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fas fa-palette"></i>
            <p>
              Цвета
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Пользователи
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
