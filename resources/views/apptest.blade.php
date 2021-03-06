<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | TutorialEdge.net</title>
    @yield('meta')
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="author" href="https://plus.google.com/b/115194233692529836662">
    <meta property="og:site_name" content="TutorialEdge.net"/>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <!-- Latest compiled and minified JavaScript -->
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/prismnew.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/front-end.css?v=1573') }}">
    <link rel="stylesheet" href="{{ asset('/css/top-menu.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('/images/favicon.ico') }}">
    <link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
</head>

<body>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->                    
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556ed8694fee5529" async="async"></script>
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-556ed8694fee5529" async="async"></script>

    <div class="navbar">
        <div class="container">
            <img src="{{ asset('/images/new-logo.png') }}" alt="">
            <form class="navbar-form navbar-right searchform" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for a tutorial...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form>
            <div class="pull-right navbar-links">              
               <ul>
                   <li class="active"><a href="/">Home</a></li>
                   <li><a href="#">Courses <i class="fa fa-chevron-down"></i></a>
                       <span></span>
                       <ul class="subs">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Courses</h5>
                                    <ul>
                                        
                                        <li><a href="/course/lwjgl3">LWJGL 3 Tutorials</a></li>
                                        <li><a href="/course/laravel-5">Laravel 5 Tutorials</a></li>
                                        <li><a href="/course/python">Python Tutorials</a>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><a href="/course/programming_design_patterns">Programming Design Concepts</a></li>
                                        <li><a href="/course/artificial-intelligence">Artificial Intelligence</a></li>
                                    </ul>
                                </div>
                            </div>
                       </ul>
                   </li>
                   <li><a href="#">Videos <i class="fa fa-chevron-down"></i></a>
                       <span></span>
                       <ul class="subs">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Video Series</h5>
                                    <ul>
                                        <li><a href="/video/programming-2d-pong">Programming 2D Pong - LWJGL 3 + OpenGL</a></li>
                
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                   
                                </div>
                            </div>
                       </ul>
                   </li>
                   @if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li>
							<a href="/profile/{{ Auth::user()->name }}">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
					@endif
                </ul>
            </div>
        </div>
    </div>
    
    <div class="clear"></div>
    
    @yield('featured-top')

    @yield('video-content')
   

    @yield('content')

    
    @yield('home-content')

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
                        <li><a href="/course/python">Python</a></li>
                        <li><a href="/course/laravel">Laravel 5</a></li>
                        <li><a href="/course/game-development">Game Development</a></li>
                        <li><a href="/course/LWJGL">LWJGL 3</a></li>
                        <li><a href="/course/artificial-intelligence">Artificial Intelligence</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="/contact">Contact Us</a></li>
                        <li><a href="/about">About Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Follow Us!</h3> 
                    <p>If you have found any of the content on this website useful then help the site out by following us on your preferred social media channel!</p>
                    <ul class="footer-connect">
                        <li><a href="https://www.facebook.com/tutorialedge"><i class="fa facebook-icon fa-facebook-square fa-3x"></i></a></li>
                        <li><a href="http://twitter.com/Tutorialedge"><i class="fa twitter-icon fa-twitter-square fa-3x"></i></a></li>
                        <li><a href="https://github.com/emforce"><i class="fa fa-github-square github-icon fa-3x"></i></a></li>
                        <li><a href="https://youtube.com/tutorialedge"><i class="fa fa-youtube-square fa-3x youtube-icon"></i></a></li>
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

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    
    <!-- Finally, to actually run the highlighter, you need to include this JS on your page -->
    <script src="{{ asset('/js/horizontalMenu.js') }}"></script>
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
