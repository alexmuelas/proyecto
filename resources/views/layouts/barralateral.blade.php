<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset ('css/material-dashboard.min.css?v=2.1.0')}}" rel="stylesheet" />

    <!--   Core JS Files   -->
    <script src=" {{ asset ('js/core/jquery.min.js')}}"></script>
    <script src="{{ asset ('js/core/popper.min.js')}}"></script>
    <script src="{{ asset ('js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{ asset ('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Chartist JS -->
    <script src="{{ asset ('/js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset ('js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset ('js/material-dashboard.min.js?v=2.1.0')}}" type="text/javascript"></script>


    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<link href="    https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" />

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });

    $(document).ready(function () {
        $('#example2').DataTable( {
        order: [ 4, 'desc' ]
    } );
    });

    $(document).ready(function () {
        $('#example3').DataTable( {
        order: [ 7, 'desc' ],
        "iDisplayLength": 25
    } );
    });

    $(document).ready(function () {
        $('#example4').DataTable( {
        // order: [ 7, 'desc' ],
        "iDisplayLength": 25
    } );
    });

    $(document).ready(function () {
        $('#example5').DataTable();
    });

    

</script>

    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');

    </script>

    <script>
        $(document).ready(function () {
            $().ready(function () {
                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

                if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                    if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                        $('.fixed-plugin .dropdown').addClass('open');
                    }

                }

                $('.fixed-plugin a').click(function (event) {
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function () {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function () {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function () {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function () {
                            $sidebar_img_container.css('background-image', 'url("' +
                                new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $(
                            '.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $full_page_background.fadeOut('fast', function () {
                            $full_page_background.css('background-image', 'url("' +
                                new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img")
                            .attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
                            'img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image +
                            '")');
                        $full_page_background.css('background-image', 'url("' +
                            new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function () {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function () {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function () {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    var simulateWindowResize = setInterval(function () {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    setTimeout(function () {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        });

    </script>
    <!-- End Google Tag Manager -->
</head>

<body>
    <div class="wrapper " style="background-image: url({{ asset('img/estadio.jpg') }});  background-repeat:no-repeat;
background-size:100% 100%;">
        <div class="sidebar" data-color="rose" data-background-color="black" data-image="#">
           
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <!-- <img style="height: 40px" src="http://proyectocomunio.local/img/logo_alex_jugador_solo.jpg" /> -->
                        <!-- <img style="height: 40px" src="../../img/logo_alex_jugador_solo.jpg" /> -->
                        <img style="height: 40px" src="{{ asset('img/logo_alex_jugador_solo.jpg') }}" />

                    </div>
                    <div class="user-info">
                        <a data-toggle="collapse" href="#collapseExample" class="username">
                            <span>
                                {{ Auth::user()->user_name }}
                                <b class="caret"></b>
                            </span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/showmyuser') }}">
                                        <span class="sidebar-mini"> MP </span>
                                        <span class="sidebar-normal"> {{ __('menu.my_profile') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/editmyuser') }}">
                                        <span class="sidebar-mini"> EP </span>
                                        <span class="sidebar-normal"> {{ __('menu.edit_my_profile') }} </span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/changepassword') }}">
                                        <span class="sidebar-mini"> CP </span>
                                        <span class="sidebar-normal"> {{ __('menu.change') }} </span>
                                    </a>
                                </li>
                                

                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active ">
                        <a class="nav-link" href="{{ url('/home') }}">
                            <i class="material-icons">dashboard</i>
                            <p> Dashboard </p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
                            <i class="material-icons">sports_soccer</i>
                            <p> {{ __('menu.team') }}
                                <b class="caret"></b>
                            </p>
                        </a>
                  
                        <div class="collapse" id="pagesExamples">
                        <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/team') }}">
                                        <span class="sidebar-normal"> {{ __('menu.team') }} </span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/edit_team') }}">
                                        <span class="sidebar-normal"> {{ __('menu.edit_team') }} </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                            <i class="material-icons">apps</i>
                            <p> {{ __('menu.bid') }}
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="componentsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ url('/pujas') }}">
                                        <span class="sidebar-normal"> {{ __('menu.bid') }} </span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/table_edit_bid')}}">
                                        <span class="sidebar-normal"> {{ __('menu.edit.bid') }} </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/clasification') }}">
                            <i class="material-icons">date_range</i>
                            <span class="sidebar-normal"> {{ __('menu.clasification') }} </span>
                        </a>
                    </li>


                    @if(auth()->user()->admin == true)

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/users') }}">
                            <i class="material-icons">people</i>
                            <span class="sidebar-normal"> {{ __('menu.user') }} </span>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/player') }}">
                            <i class="material-icons">sports_kabaddi</i>
                            <span class="sidebar-normal"> {{ __('menu.player') }} </span>
                        </a>
                    </li>
                    @endif
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>

                </div>

                <div class="collapse navbar-collapse" style="color: white; ">
                    <ul class="navbar-nav" style="width: 210px;">
                        <li class="nav-item dropdown" style="left: -20px;">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">language</i> {{ __('menu.language') }}
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a href="{{ route('set_language', ['es']) }}" class="dropdown-item"
                                    style="width: 120px;">
                                    {{ __('menu.spain') }}
                                </a>
                                <a href="{{ route('set_language', ['en']) }}" class="dropdown-item"
                                    style="width: 120px;">
                                    {{ __('menu.english') }}
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>


                <div class="collapse navbar-collapse">
                
                    <a class="nav-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color: white; padding: 0px 20px 0px 0px">
                        {{ __('Logout') }}
                    </a>

                    

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>

            </nav>
            <!-- End Navbar -->

            <div class="wrapper wrapper-full-page">
                <div class="py-5">
                    @yield('content')
                </div>


            </div>
        </div>


</body>

</html>
