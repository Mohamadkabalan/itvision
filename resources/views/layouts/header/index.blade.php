<!--topline section visible only on small screens|-->
    <header class="page_header ds">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-11">
                    <a href="./" class="logo text-center">
                        <img src="{{ asset('images/logo.png') }}" alt="">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-6 col-1 text-sm-center">
                    <!-- main nav start -->
                    <nav class="top-nav">
                        <ul class="nav sf-menu">


                            <li class=" @if($page=='home') active @endif">
                                <a href="/">Home</a>
                            </li>
                            <li  class=" @if($page=='about') active @endif">
                                <a href="/about">About</a>
                            </li>
                            <li  class=" @if($page=='services') active @endif">
                                <a href="/services">Services</a>
                            </li>
                            <li  class=" @if($page=='works') active @endif">
                                <a href="/works">Works</a>
                            </li>
                            <li  class=" @if($page=='career') active @endif">
                                <a href="/career">Career</a>
                            </li>
                            <li  class=" @if($page=='contact') active @endif">
                                <a href="/contact-us">Contacts</a>
                            </li>
                        </ul>


                    </nav>
                    <!-- eof main nav -->
                </div>
                <div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
                    <div class="header_phone">
                        <h6>
                            <span>+961</span>-76053730
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- header toggler -->
        <span class="toggle_menu"><span></span></span>
    </header>