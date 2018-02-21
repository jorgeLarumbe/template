  <header class="main-header">
    <!-- Logo -->
    <a href="{{ url('/') }}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="/images/logos/logo-laravel.png" style="width: 32px; height: 21px;"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="/images/logos/logo-laravel.png" style="width: 32px; height: 21px;"> Laravel 5.6</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
	    	@if (Auth::guest())
	    		@if (Route::has('login'))
	              <li class="dropdown">
	                  <a href="{{ route('login') }}">
	                      <i class="fa fa-power-off"></i> Login
	                  </a>
	              </li>
	              <li class="dropdown">
	                  <a href="{{ route('register') }}">
	                      <i class="fa fa-sign-out fa-fw"></i> Register
	                  </a>
	              </li>
	            @endif
	        @else

          <!-- Messages: style can be found in dropdown.less-->
          @include('admin.partials.messages-header')

          <!-- Notifications: style can be found in dropdown.less -->
          @include('admin.partials.notifications-header')

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user-circle-o hidden-user"></i><span class="hidden-xs">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/uploads/avatars/{{ Auth::user()->avatar }}" style="border-color: #fff;" class="img-circle" alt="User Image">

                <p>
                  {{ Auth::user()->name }} - Web Developer
                  <small>{{ Auth::user()->email }}</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              	<li>
                  <a href="{{ url('avatar-profile') }}"><i class="fa fa-user-circle-o" style="margin-right: 15px;"></i>Profile</a>
                </li>
                <li>
                  <a href="{{ url('table') }}"><i class="fa fa-gear fa-fw" style="margin-left:-2px;margin-right: 13px;"></i>Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="{{ route('logout') }}" style="margin-bottom: 8px;" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="fa fa-power-off fa-fw" style="margin-left:-2px;"></i> Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
                </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
          @endif
        </ul>
      </div>
    </nav>
  </header>
