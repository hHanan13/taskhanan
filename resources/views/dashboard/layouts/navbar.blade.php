<!-- Top navbar -->
<nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        
         <!-- User -->
         <ul class="navbar-nav align-items-center d-none d-md-flex">
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="media align-items-center">
                        <span class="avatar avatar-sm rounded-circle">
                            <img alt="" src="{{ asset('assets/front/images/icons/image.png') }}">
                        </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">hanan</span>
                        </div>
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                    <div class=" dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome!</h6>
                    </div>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-single-02"></i>
                        <span>{{ trans('admin.navbar.profile')}}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-settings-gear-65"></i>
                        <span>{{ trans('admin.navbar.setting')}}</span>
                    </a>
                    <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ trans('admin.navbar.traffic')}}</span>
                    </a>
                      <a href="#" class="dropdown-item">
                        <i class="ni ni-calendar-grid-58"></i>
                        <span>{{ trans('admin.navbar.traffic_statics')}}</span>
                    </a>
                     
                    <div class="dropdown-divider"></div>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" class="dropdown-item">
                        <i class="ni ni-user-run"></i>
                        <span>{{ trans('admin.navbar.logout')}}</span>
                    </a>
   
<form id="frm-logout" action="#" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
                </div>
            </li>
        </ul>
         <!-- Form -->
         <form class="navbar-search navbar-search-dark form-inline mr-3 d-md-flex">
            <div class="form-group mb-0">
                <div class="input-group input-group-alternative">
                    
                    <input class="form-control" placeholder="Search" type="text">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
        </form>
        <!-- Brand -->
        <div class="d-none d-lg-inline-block">
            @if(App::getLocale() == 'ar')
       <a href="{{url('/en/'.request()->segment(3))}}"> En</a>
       @else
<a href="{{url('/ar/'.request()->segment(3))}}"> Ar</a>
       @endif
       <a href="#"> <img alt="" src="{{ asset('assets/front/images/icons/bell (1).png') }}" class="img-fluid mr-3 point"></a>
        </div>
    </div>
</nav>