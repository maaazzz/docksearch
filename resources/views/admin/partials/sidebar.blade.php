<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">

    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
      <a href="/" class="app-brand-text demo sidenav-text font-weight-normal ml-2">
        <img src="{{ asset('storage/'.$site_setting->website_logo) }}" style="width:140px;height:auto">
    </a>
      <a href="javascript:void(0)" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
        <i class="ion ion-md-menu align-middle"></i>
      </a>
    </div>
    <div class="sidenav-divider mt-0"></div>
    <!-- Links -->
    <ul class="sidenav-inner py-1">

      <li class="sidenav-item {{ request()->is('admin/users*') ? 'active' : '' }} {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}" class="sidenav-link"><i class="sidenav-icon ion ion-md-person"></i>
          <div>Users</div>
        </a>
      </li>
      <li class="sidenav-item {{ request()->is('admin/docks-list') ? 'active' : '' }}">
        <a href="{{ route('docks.index') }}" class="sidenav-link"><i class="sidenav-icon ion ion-md-boat"></i>
          <div>Docks List</div>
        </a>
      </li>
      <li class="sidenav-item">
        <a href="{{ route('all.rentlist.settings') }}" class="sidenav-link {{ request()->is('admin/all-rentlist-settings') ? 'active' : '' }}"> <i class="sidenav-icon ion ion-md-settings"></i>
          <div>All Rent/Shop Listings</div>
        </a>
      </li>
      <li class="sidenav-item">
        <a href="{{ route('all.reviews.settings') }}" class="sidenav-link {{ request()->is('admin/all-reviews-settings') ? 'active' : '' }}"> <i class="sidenav-icon ion ion-md-settings"></i>
          <div>All Reviews Settings</div>
        </a>
      </li>
      {{-- <li class="sidenav-item {{ request()->is('admin/setting*') ? 'active' : '' }}">
        <a href="{{ route('site-setting.index') }}" class="sidenav-link"><i class="sidenav-icon ion ion-md-settings"></i>
          <div>Settings</div>
        </a>
      </li> --}}

      <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link {{ request()->is('admin/site-setting') ? 'active' : '' }} sidenav-toggle"><i class="sidenav-icon ion ion-md-settings"></i>
          <div>Settings</div>
        </a>

        <ul class="sidenav-menu">
          <li class="sidenav-item">
            <a href="{{ route('site-setting.index') }}" class="sidenav-link"><i class="sidenav-icon ion ion-md-settings"></i>
                <div>Website Settings</div>
              </a>
          </li>


          <li class="sidenav-item">
            <a href="{{ route('menue.settings') }}" class="sidenav-link"> <i class="sidenav-icon ion ion-md-settings"></i>
              <div>Menu Settings</div>
            </a>
          </li>
          <li class="sidenav-item">
            <a href="{{ route('search-input-fields.index') }}" class="sidenav-link"> <i class="sidenav-icon ion ion-md-settings"></i>
              <div>Search Form Settings</div>
            </a>
          </li>
        </ul>
      </li>

      {{-- <li class="sidenav-item">
        <a href="javascript:void(0)" class="sidenav-link sidenav-toggle"><i class="sidenav-icon ion ion-logo-buffer"></i>
          <div>Complete UI</div>
        </a>

        <ul class="sidenav-menu">
          <li class="sidenav-item">
            <a target="_blank" href="complete-ui_base.html" class="sidenav-link">
              <div>Base</div>
            </a>
          </li>
          <li class="sidenav-item">
            <a target="_blank" href="complete-ui_plugins.html" class="sidenav-link">
              <div>Plugins</div>
            </a>
          </li>
          <li class="sidenav-item">
            <a target="_blank" href="complete-ui_charts.html" class="sidenav-link">
              <div>Charts</div>
            </a>
          </li>
        </ul>
      </li> --}}

    </ul>
  </div>
