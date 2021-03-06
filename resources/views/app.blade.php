<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') | TutorialEdge.net</title>
    @yield('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="author" href="https://plus.google.com/b/115194233692529836662">
    <meta property="og:site_name" content="TutorialEdge.net" />
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.ico') }}">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('/images/new-logo.png') }}" alt="Home of high quality programming tutorials">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Tutorials <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/category/lwjgl3">LWJGL 3 Tutorials</a>
                            </li>
                            <li><a href="/category/laravel-5">Laravel 5 Tutorials</a>
                            </li>
                            <li><a href="/category/python">Python Tutorials</a>
                            </li>
                            <li><a href="/category/programming_design_patterns">Programming Design Concepts</a>
                            </li>
                            <li><a href="/category/artificial-intelligence">Artificial Intelligence</a>
                            </li>
                            <li><a href="/category/webdev">Web Development Tutorials</a></li>
                        </ul>
                    </li>
                    <li><a href="/courses">Courses</a>
                    </li>
                    @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}">Login</a>
                    </li>
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/profile/{{ Auth::user()->name }}">Profile</a></li>
                            <li><a href="{{ url('/auth/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{ url('/auth/register') }}">Register Now!</a></li>
                    {!! Form::open(array('route' => 'queries.store', 'class'=>'form navbar-form navbar-right searchform')) !!}

                    <div class="input-group">
                        {!! Form::text('search', null, array('required', 'class'=>'form-control', 'placeholder'=>'Search for a tutorial...')) !!}
                        <span class="input-group-btn">
                        {!! Form::submit('Search',
                                array('class'=>'btn btn-default')) !!}
                    </span>
                    </div>
                    {!! Form::close() !!}
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>


    <div class="clear"></div>

    @yield('featured-top') @yield('video-content') @yield('content') @yield('home-content')

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>About Us</h3>
                    <p>Tutorial-Edge.com was founded in January of 2015 with the main goal of helping people who want to learn how to code.
                        <br>
                        <br>The site initially started out as a hobby for me and more importantly an incentive for me to constantly keep pushing myself and learning new things.</p>
                </div>
                <div class="col-md-3">
                    <h3>Featured Courses</h3>
                    <ul>
                        <li><a href="/category/python">Python</a>
                        </li>
                        <li><a href="/category/laravel-5">Laravel 5</a>
                        </li>
                        <li><a href="/category/game-development">Game Development</a>
                        </li>
                        <li><a href="/category/lwjgl3">LWJGL 3</a>
                        </li>
                        <li><a href="/category/artificial-intelligence">Artificial Intelligence</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="/contact">Contact Us</a>
                        </li>
                        <li><a href="/about">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us!</h3> 
                    <p>If you have found any of the content on this website useful then help the site out by following us on your preferred social media channel!</p>
                    <ul class="footer-connect">
                        <li><a href="https://www.facebook.com/tutorialedge"><i class="fa facebook-icon fa-facebook-square fa-3x"></i></a>
                        </li>
                        <li><a href="http://twitter.com/Tutorialedge"><i class="fa twitter-icon fa-twitter-square fa-3x"></i></a>
                        </li>
                        <li><a href="https://github.com/emforce"><i class="fa fa-github-square github-icon fa-3x"></i></a>
                        </li>
                        <li><a href="https://youtube.com/tutorialedge"><i class="fa fa-youtube-square fa-3x youtube-icon"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright 2015 &copy; TutorialEdge.net</p>
                </div>
                <div class="col-md-6">
                    <p class="pull-right">Designed and Owned by <a href="http://elliotforbes.co.uk/">Elliot Forbes.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
     <script src="{{ asset('/js/jquery.min.js') }}"></script>
     <script src="{{ asset('/js/bootstrap.min.js') }}"></script>

     <script src="{{ asset('/js/prismnew.js') }}"></script>
    
    <script>
        $(function () {
            cbpHorizontalMenu.init();
        });
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-10255990-23', 'auto');
        ga('send', 'pageview');
    </script>
</body>

</html>
