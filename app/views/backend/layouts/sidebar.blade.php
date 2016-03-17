@if (Sentry::check())
<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="{{ URL::to('backend/dashboard') }}"><img src="{{asset('assets/img/ui-sam.jpg')}}" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Welcome in AlterApp Dashboard</h5>
                  <h5  class="centered"><div class="line"></div></h5>
                  <?php $user = Sentry::getUser(); ?>
                  <a href="{{ action('UserController@show', array($user->id)) }}"> <h5 class="centered">       @if (($user->first_name)&&($user->last_name)) {{ $user->first_name }}  {{ $user->last_name }} @else{{ $user->email }}@endif</h5></a>				
             	  <li class="mt">
                      <a class="{{ Request::is( 'backend/dashboard') ? 'active' : '' }}" href="{{ URL::to('backend/dashboard') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>	
                                    @if (Sentry::getUser()->hasAccess('admin'))
                  <li class="sub-menu">
                    <a class="{{ Request::is('backend/dashboard/frontend-settings') ? 'active' : '' }} {{ Request::is( 'backend/dashboard/frontend-settings/create') ? 'active' : '' }} {{ Request::is( 'backend/dashboard/frontend-settings/12') ? 'active' : '' }}"  href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span >Frontend Settings</span>
                      </a>
                     <ul class="sub">
                          <li><a  href="{{ URL::to('backend/dashboard/frontend-settings/') }}">Manage Settings</a></li>
                          <li><a class="{{ Request::is( 'backend/dashboard/frontend-settings/create') ? 'active' : '' }}" href="{{ URL::to('backend/dashboard/frontend-settings/create') }}">Create your Settings</a></li>
                          <li><a class="{{ Request::is( 'backend/dashboard/frontend-settings/12') ? 'active' : '' }}" href="{{ URL::to('backend/dashboard/frontend-settings/12') }}">View Default Settings</a></li>                         
                      </ul>
                  </li>                                  
                  @else
                  @endif
                  @if (Sentry::getUser()->hasAccess('admin'))
                  <li class="sub-menu">
                      <a class="{{ Request::is('backend/dashboard/users') ? 'active' : '' }}" href="{{ URL::to('backend/dashboard/users') }}" >
                          <i class="fa fa-user"></i>
                          <span>Users Managament</span>
                      </a>                      
                  </li>
                  @else
                  <li class="sub-menu">
                      <a class="{{ Request::is('backend/dashboard/users/{id}') ? 'active' : '' }}" href="{{ action('UserController@show', array($user->id)) }}" >
                          <i class="fa fa-user"></i>
                          <span>User Profile</span>
                      </a>                      
                  </li>
                                    <li class="sub-menu">
                      <a class="{{ Request::is('backend/dashboard/users/{id}') ? 'active' : '' }}" href="{{ action('UserController@edit', array($user->id)) }}" >
                                                    <i class="fa fa-user-md"></i>
                                                    <span>Edit My Profile</span>
                      </a>                      
                  </li>
                  @endif
                  @if (Sentry::getUser()->hasAccess('admin'))
                  <li class="sub-menu">
                      <a class="{{ Request::is('backend/dashboard/groups') ? 'active' : '' }}" href="{{ URL::to('backend/dashboard/groups') }}" >
                          <i class="fa fa-users"></i>
                          <span>Groups Managament</span>
                      </a>                      
                  </li>
                  @else
                  @endif
                  <li class="sub-menu">
                      <a class="{{ Request::is('backend/dashboard/barcode-generator') ? 'active' : '' }}" href="{{ URL::to('backend/dashboard/barcode-generator') }}" >
                          <i class="fa fa-shopping-cart"></i>
                          <span>Products Managament</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
 
      </aside>
@endif