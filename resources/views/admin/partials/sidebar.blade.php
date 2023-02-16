<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="{{ route('admin.dashboard') }}">  <img src="{{ asset('assets/img/logo1.png') }}" alt="logo" width="230"></a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
  <a href="{{ route('admin.dashboard') }}">  <img src="{{ asset('assets/img/logo2.png') }}" alt="logo" width="37"></a>
  </div>
  <ul class="sidebar-menu">
      <li class="menu-header">Dashboard</li>
      <li class="{{ Request::route()->getName() == 'admin.dashboard' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fa fa-columns"></i> <span>Dashboard</span></a></li>
      
      <!-- @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Operator Perangkat Daerah</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Opd</span></a></li>
      @endif -->

      @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Operator Perangkat Daerah</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-users"></i> <span>Opd</span></a></li>
      @endif
      

      @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Aset</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-layer-group"></i> <span>Jenis Aset</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-database"></i> <span>Aset Tik</span></a></li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-map-marked-alt"></i> <span>Lokasi Aset</span></a></li>
      @endif

      @if(Auth::user()->can('manage-users'))
      <li class="menu-header">Maintainance</li>
      <li class="{{ Request::route()->getName() == 'admin.users' ? ' active' : '' }}"><a class="nav-link" href="{{ route('admin.users') }}"><i class="fa fa-cogs"></i> <span>Maintainance</span></a></li>
      @endif
  </ul>
</aside>
