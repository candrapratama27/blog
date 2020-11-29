 <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">BLOGQUE</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
               <li class="active"><a class="nav-link" href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Starter</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-calendar-alt"></i> <span>Kategori</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route ('category.index')}}">List Kategori</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i> <span>Tags</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route ('tag.index')}}">List Tags</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Artikel</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route ('post.index')}}">List Artikel</a></li>
                   <li><a class="nav-link" href="{{ route ('post.tampil_hapus')}}">List Artikel Dihapus</a></li>
                </ul>
              </li>
               <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user"></i> <span>User</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{ route ('user.index')}}">List User</a></li>
                </ul>
              </li>
             
        </aside>
      </div>