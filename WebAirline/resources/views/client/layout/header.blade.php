<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    Start Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<header class="header-section header-section-one">
    <div class="header">
        <div class="header-bottom-area">
            <div class="container-fluid">
                <div class="header-menu-content">
                    <nav class="navbar navbar-expand-lg p-0">
                        <a class="site-logo site-title" href="index.html"><img src={{url('client/assets/images/logo.png')}}
                                                                               alt="site-logo"></a>
                        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav main-menu ml-auto">
                                <li class="menu_has_children"><a href="{{url('trangchu')}}">Home</a>
                                </li>
                                <li><a href="about.html">About Us</a></li>
                                <li class="menu_has_children"><a href="{{url('ariline')}}">Pages</a>
                                </li>
                                <li class="menu_has_children"><a href="{{url('blog')}}">Blog</a>
                                </li>
                                <li><a href="{{url('logout')}}">Logout</a></li>
                                <li><a href="{{url('login')}}">Sign Up</a></li>
                            </ul>
                            <div class="header-right">
                                <div class="search-bar d-none d-lg-block">
                                    <a href="#0"><i class="fas fa-search"></i></a>
                                    <div class="header-top-search-area">
                                        <form class="header-search-form"
                                              action="https://gamblingscript.com/search" method="GET">
                                            <input type="search" name="keyword" id="header_search"
                                                   placeholder="Search Product...">
                                            <button class="header-search-btn"><i
                                                    class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-action-area">
                                    <a href="{{url('service')}}" class="action-btn two"><i
                                            class="icon-btn-icon"></i></a>
                                    <div class="header-action">
                                        <a href="{{url('service')}}" class="btn--base"><i
                                                class="icon-btn-icon"></i> Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
End Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

