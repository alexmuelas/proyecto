<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset ('css/material-dashboard.min.css?v=2.1.0')}}" rel="stylesheet" />
    <!-- Google Tag Manager -->

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
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
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

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function () {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
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
background-size:100% 100%;" >
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="#">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="photo">
            <img src="#" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                Tania Andrew
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> MP </span>
                    <span class="sidebar-normal"> My Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="sidebar-mini"> S </span>
                    <span class="sidebar-normal"> Settings </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="../examples/dashboard.html">
              <i class="material-icons">dashboard</i>
              <p> Dashboard </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#pagesExamples">
              <i class="material-icons">image</i>
              <p> Pages
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="pagesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/pricing.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Pricing </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/rtl.html">
                    <span class="sidebar-mini"> RS </span>
                    <span class="sidebar-normal"> RTL Support </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/timeline.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Timeline </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/login.html">
                    <span class="sidebar-mini"> LP </span>
                    <span class="sidebar-normal"> Login Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/register.html">
                    <span class="sidebar-mini"> RP </span>
                    <span class="sidebar-normal"> Register Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/lock.html">
                    <span class="sidebar-mini"> LSP </span>
                    <span class="sidebar-normal"> Lock Screen Page </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/user.html">
                    <span class="sidebar-mini"> UP </span>
                    <span class="sidebar-normal"> User Profile </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/pages/error.html">
                    <span class="sidebar-mini"> E </span>
                    <span class="sidebar-normal"> Error Page </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
              <i class="material-icons">apps</i>
              <p> Components
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="componentsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" data-toggle="collapse" href="#componentsCollapse">
                    <span class="sidebar-mini"> MLT </span>
                    <span class="sidebar-normal"> Multi Level Collapse
                      <b class="caret"></b>
                    </span>
                  </a>
                  <div class="collapse" id="componentsCollapse">
                    <ul class="nav">
                      <li class="nav-item ">
                        <a class="nav-link" href="#0">
                          <span class="sidebar-mini"> E </span>
                          <span class="sidebar-normal"> Example </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/components/buttons.html">
                    <span class="sidebar-mini"> B </span>
                    <span class="sidebar-normal"> Buttons </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/components/grid.html">
                    <span class="sidebar-mini"> GS </span>
                    <span class="sidebar-normal"> Grid System </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/components/panels.html">
                    <span class="sidebar-mini"> P </span>
                    <span class="sidebar-normal"> Panels </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/components/sweet-alert.html">
                    <span class="sidebar-mini"> SA </span>
                    <span class="sidebar-normal"> Sweet Alert </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/components/notifications.html">
                    <span class="sidebar-mini"> N </span>
                    <span class="sidebar-normal"> Notifications </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/components/icons.html">
                    <span class="sidebar-mini"> I </span>
                    <span class="sidebar-normal"> Icons </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/components/typography.html">
                    <span class="sidebar-mini"> T </span>
                    <span class="sidebar-normal"> Typography </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#formsExamples">
              <i class="material-icons">content_paste</i>
              <p> Forms
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="formsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/forms/regular.html">
                    <span class="sidebar-mini"> RF </span>
                    <span class="sidebar-normal"> Regular Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/forms/extended.html">
                    <span class="sidebar-mini"> EF </span>
                    <span class="sidebar-normal"> Extended Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/forms/validation.html">
                    <span class="sidebar-mini"> VF </span>
                    <span class="sidebar-normal"> Validation Forms </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/forms/wizard.html">
                    <span class="sidebar-mini"> W </span>
                    <span class="sidebar-normal"> Wizard </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">grid_on</i>
              <p> Tables
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/tables/regular.html">
                    <span class="sidebar-mini"> RT </span>
                    <span class="sidebar-normal"> Regular Tables </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/tables/extended.html">
                    <span class="sidebar-mini"> ET </span>
                    <span class="sidebar-normal"> Extended Tables </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/tables/datatables.net.html">
                    <span class="sidebar-mini"> DT </span>
                    <span class="sidebar-normal"> DataTables.net </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
              <i class="material-icons">place</i>
              <p> Maps
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="mapsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/maps/google.html">
                    <span class="sidebar-mini"> GM </span>
                    <span class="sidebar-normal"> Google Maps </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/maps/fullscreen.html">
                    <span class="sidebar-mini"> FSM </span>
                    <span class="sidebar-normal"> Full Screen Map </span>
                  </a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="../examples/maps/vector.html">
                    <span class="sidebar-mini"> VM </span>
                    <span class="sidebar-normal"> Vector Map </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="../examples/calendar.html">
              <i class="material-icons">date_range</i>
              <p> Calendar </p>
            </a>
          </li>
        </ul>
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
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          
        </div>
      </nav>
      <!-- End Navbar -->


      
            <div class="wrapper wrapper-full-page">
                <!-- <div class="page-header" filter-color="black"
                    style="background-image: url({{ asset('img/estadio.jpg') }}); background-size: cover; "> -->
                    <div class="py-5">
                      @yield('content')
                    </div>
                  

                </div>
            </div>

        




      <!-- <div class="content">
        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <div class="card ">
         
                        <div class="row">
                          <div class="col-md-4">
                            <div class="card card-chart">
                              <div class="card-header card-header-rose">
                              </div>
                              <div class="card-body">
                                <h4 class="card-title">Website Views</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                          <div class="card card-chart">
                              <div class="card-header card-header-rose">
                              </div>
                              <div class="card-body">
                                <h4 class="card-title">Website Views</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4">
                          <div class="card card-chart">
                              <div class="card-header card-header-rose">
                              </div>
                              <div class="card-body">
                                <h4 class="card-title">Website Views</h4>
                                <p class="card-category">Last Campaign Performance</p>
                              </div>
                              <div class="card-footer">
                                <div class="stats">
                                  <i class="material-icons">access_time</i> campaign sent 2 days ago
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                       
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
               -->
</body>

</html>
