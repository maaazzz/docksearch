<header class="stick style1 w-100 d-flex flex-wrap justify-content-between align-items-center">
    <div class="logo" style="margin-top:-2px;"><h1 class="mb-0"><a href="/" title="Home"><img class="img-fluid" src="{{ url('storage/'.$site_setting->website_logo) }}" alt="Logo" srcset="{{ url('storage/'.$site_setting->website_logo) }}" style="width: 170px"></a></h1></div><!-- Logo -->
    <div class="menu-wrap">

        <nav class="d-inline-flex align-items-center">
            <div>
                <ul class="mb-0 list-unstyled d-inline-flex">
                    {{-- <li><a href="/" title="">Home</a></li> --}}
                    <li><a href="{{ route('docks.listing') }}" title="">Find a Dock</a></li>
                    <li><a href="{{ route('user.profile') }}" title="">List a Dock</a></li>
                    <li><a href="{{ route('contact.us') }}" >Contact Us</a></li>
                    @foreach ($top_navbar as $item)
                    <li><a href="{{ url($item->url) }}" target="_blank">{{ $item->title }}</a></li>
                    @endforeach
                    {{-- <li><a href="{{ URL::to('https://www.bestyachtinsurance.com') }}" target="_blank">Marine Insurance</a></li>
                    <li><a href="https://www.bestyachtinsurance.com" title="" target="_blank">Marine Financing</a></li>
                    <li><a href="https://www.myyachtsales.com" target="_blank">List Your Boat</a></li> --}}
                    @auth
                    <li class="menu-item-has-children"><a href="javascript:void(0);" title="">{{ auth()->user()->first_name }}</a>
                        <ul class="children mb-0 list-unstyled">
                            @if (auth()->user()->role == 1)
                            <li><a style="cursor: pointer;" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            @endif
                            <li><a style="cursor: pointer;" onclick="document.getElementById('logout').submit()">Logout</a></li>

                            <form action="{{ route('logout') }}" id="logout" method="post">
                            @csrf
                            </form>
                        </ul>
                    </li>
                    @endauth
                </ul>
            </div>

            @guest
            <a class="login-btn" href="{{ route('register') }}" title=""><i class="thm-clr fas fa-user"></i>login</a>
            @endguest
        </nav>
    </div><!-- Menu Wrap -->

</header><!-- Header -->
<div class="rspn-hdr">
    <div class="rspn-mdbr">
        <div class="rspn-scil">
            <a href="javascript:void(0);" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="javascript:void(0);" title="Google Plus" target="_blank"><i class="fab fa-google-plus-g"></i></a>
            <a href="javascript:void(0);" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="javascript:void(0);" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>

    </div>
    <div class="lg-mn">
        <div class="logo"><a href="/" title="Home"><img src="{{ url('storage/'.$site_setting->logo_for_mobile) }}" alt="Logo" srcset="{{ url('storage/'.$site_setting->logo_for_mobile) }}"></a></div>
        <span class="rspn-mnu-btn"><i class="fa fa-list-ul"></i></span>
    </div>
    <div class="rsnp-mnu">
        <span class="rspn-mnu-cls"><i class="fa fa-times"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            <li><a href="/" title="">Home</a></li>
            <li><a href="{{ route('docks.listing') }}" title="">Find a Dock</a></li>
            <li><a href="{{ route('user.profile') }}" title="">List a Dock</a></li>
            <li><a href="{{ route('contact.us') }}" title="">Contact Us</a></li>
            @foreach ($top_navbar as $item)
                    <li><a href="{{ url($item->url) }}" target="_blank">List a Dock</a></li>
            @endforeach

            @auth
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="">{{ auth()->user()->first_name }}</a>
                <ul class="children mb-0 list-unstyled">
                    <li><a style="cursor: pointer;" onclick="document.getElementById('logout-form').submit()">Logout</a></li>
                    <form action="{{ route('logout') }}" id="logout-form" method="post">
                    @csrf
                    </form>
                </ul>
            </li>
            @endauth
            @guest
            <li>
                <a class="login-btn" href="{{ route('register') }}" title=""><i class="thm-clr fas fa-user"></i>login or Register</a>
            </li>
            @endguest
        </ul>

    </div><!-- Responsive Menu -->
</div><!-- Responsive Header -->
