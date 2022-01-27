<!-- Preloader
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>
 End Preloader -->


<!-- Header -->
<header class="header shop">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <!-- Top Left -->
                    <div class="top-left">
                        <ul class="list-main">
                            @foreach (config('datos') as $data)
                                @php $nameClass = key($data); $content = $data[$nameClass]; @endphp
                                <li><i class="{{ $nameClass }}"></i>{{ $content }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!--/ End Top Left -->
                </div>
                <div class="col-lg-8 col-md-12 col-12">
                    <!-- Top Right -->
                    <div class="right-content">
                        <ul class="list-main">
                            <li><i class="ti-location-pin"></i>Store location</li>
                            <li><i class="ti-alarm-clock"></i> <a href="#">Daily deal</a></li>
                            <li><i class="ti-user"></i> <a href="#">My account</a></li>
                            <li>
                                @if (Auth::user())
                                    <i class="ti-power-off"></i><a href="/logout">Logout {{Auth::user()->name}}</a>
                                @else
                                    <i class="ti-power-off"></i><a href="/login">Login</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                    <!-- End Top Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner">
        <div class="container">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <div class="menu-area">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg">
                                <div class="navbar-collapse">
                                    <div class="nav-inner">
                                        <ul class="nav main-menu menu navbar-nav">
                                            <li class="active"><a href="/">Home</a></li>
                                            <li><a href="#">Tenda<i class="ti-angle-down"></i><span class="new">New</span></a>
                                                <ul class="dropdown">
                                                    @if(Auth::user() && Auth::user()->admin)
                                                        <li><a href="{{ route('ganga.create') }}">Nou Producte</a></li>
                                                    @endif
                                                    <li><a href="cart.html">Carret</a></li>
                                                    <li><a href="checkout.html">Compra</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="/contact">Contacta amb nosaltres</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!--/ End Main Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!--/ End Header -->
