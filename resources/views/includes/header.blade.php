<div class="header">
  <div class="nav-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div id="main-menu" class="navbar">
            <div class="navbar-header">
              <div class="logo">
                <a href="/home"><img src="{{asset('images/about-icon-1.png')}}" /></a>
              </div>
              <div class="logo-title">
                <p>UFVPN</p>
              </div>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#responsive-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse bs-navbar-collapse collapse" aria-expanded="true" id="responsive-menu">
              <ul class="nav navbar-nav pull-left">
                <li class="">
                  <a href="/home" lang="title">{{trans('header.home')}}</a>
                </li>
                <!-- <li class="">
                  <a href="/home" lang="title">{{trans('header.order')}}</a>
                </li> -->
                <li class="">
                  <a href="{!! URL('logout') !!}" lang="title">{{trans('header.logout')}}</a>
                </li>
                

                <!-- <li class="">
                  <a href="/announcement" lang="title">分页示例</a>
                </li>
                <li class="">
                  <a href="/contact" lang="title">contact us</a>
                </li>

                @if(isset($currentUser))
                <li class="">
                  <a href="/memberarea/index" lang="title">Member Area</a>
                </li>
                @else
                <li class="">
                  <a href="#" lang="title" data-toggle="modal" data-target="#loginModal">Member Area</a>
                </li>
                @endif -->
                <!-- <li class="dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" lang="title">
                    @if( Session::get('locale') ==='cn')
                    <img src="{{asset('images/language-china.jpg')}}"/>中文
                    @else
                    <img src="{{asset('images/language-en.jpg')}}"/>English
                    @endif
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void(0)" onclick="setlocale('cn')"><img src="{{asset('images/language-china.jpg')}}"/>中文</a></li>
                    <li><a href="javascript:void(0)" onclick="setlocale('en')"><img src="{{asset('images/language-en.jpg')}}"/>English</a></li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
