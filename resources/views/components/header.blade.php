<header style="position:sticky;top:0px;background:#fff;z-index:99000">
    <div class="container">
        <div class="row">
            <div class="col-1 left-head">
                <div class="web-head-logo">
                    <img src="/assets/imgs/picg-2.svg" alt="" width="100%">
                </div>
            </div>
            <div class="col-8 center-head ps-5">
                <nav>
                    <ul>
                        <li><a href="{{ route('front.home') }}">Home</a></li>
                        <li><a href="{{ route('front.services') }}">Services</a></li>
                        <li><a href="{{ route('front.expertise') }}">Expertise</a></li>
                        <li class="position-relative sub-menu"><a href="#">Resources <i
                                    class="fa-solid fa-angle-down"></i></a>
                            <div class="childmenus">
                                <ul>
                                    <li><a href="{{ route('front.insights') }}">Insights</a></li>
                                    <li><a href="{{ route('front.blog') }}">Blog</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ route('front.about') }}">About</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-3 end-head">
                <nav>
                    <ul>
                        <li class="position-relative sub-menu"><a href="#">Jobs <i class="fa-solid fa-angle-down" style="color:#9d9d9d!important"></i></a>
                            <div class="childmenus">
                                <ul>
                                    <li><a href="{{ route('front.ecareers') }}">Browse Jobs</a></li>
                                    <li><a href="{{ route('front.submitcv') }}">Submit CV</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="rct-btn" href="{{ route('front.contact') }}"><i class="fa-solid fa-bullhorn"></i>
                                Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>