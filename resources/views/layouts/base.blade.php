<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/Estyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Astyle.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="{{ asset('assets/js/jquery-1.11.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment-2.2.1.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/clndr.js') }}"></script>
    <script src="{{ asset('assets/js/site.js') }}"></script>
    <script src="{{ asset('assets/js/underscore-min.js') }}"></script>
    <script src="{{ asset('assets/js/jClocksGMT.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.rotate.js') }}"></script>
    <link href="{{ asset('assets/lib/main.css') }}" rel='stylesheet' />
    <script src="{{ asset('assets/lib/main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#clock_hou').jClocksGMT({
                offset: '-5',
                hour24: true
            });
            $('#clock_dc').jClocksGMT({
                offset: '-4',
                digital: false
            });
            $('#clock_india').jClocksGMT({
                offset: '+5.5'
            });
        });

    </script>
    <!---Google Analytics Designmaz.net-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-35751449-15', 'auto');
        ga('send', 'pageview');

    </script>
    <!---Google Analytics Designmaz.net-->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-35751449-15', 'auto');
        ga('send', 'pageview');

    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var initialTimeZone = 'local';
            var timeZoneSelectorEl = document.getElementById('time-zone-selector');
            var loadingEl = document.getElementById('loading');
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                timeZone: initialTimeZone,
                headerToolbar: {
                    left: 'prev',
                    center: 'title',
                    right: 'next',
                },
                initialDate: '2021-04-01',
                navLinks: false, // can click day/week names to navigate views
                editable: true,
                selectable: true,
                selectAllow: function(e) {
                    if (e.end.getTime() / 1000 - e.start.getTime() / 1000 <= 86400) {
                        return true;
                    }
                },
                dayMaxEvents: true, // allow "more" link when too many events
                events: {
                    url: 'php/get-events.php',
                    failure: function() {
                        document.getElementById('script-warning').style.display = 'inline'; // show
                    }
                },
                loading: function(bool) {
                    if (bool) {
                        loadingEl.style.display = 'inline'; // show
                    } else {
                        loadingEl.style.display = 'none'; // hide
                    }
                },

                eventTimeFormat: {
                    hour: 'numeric',
                    minute: '2-digit',
                    timeZoneName: 'short'
                },

                dateClick: function(arg) {
                    console.log('dateClick', calendar.formatIso(arg.date));
                },

                select: function(arg) {
                    console.log('select', calendar.formatIso(arg.start), calendar.formatIso(arg
                        .end));
                }
            });

            calendar.render();

            // load the list of available timezones, build the <select> options
            // it's HIGHLY recommended to use a different library for network requests, not this internal util func
            FullCalendar.requestJson('GET', 'php/get-time-zones.php', {}, function(timeZones) {

                timeZones.forEach(function(timeZone) {
                    var optionEl;

                    if (timeZone !== 'UTC') { // UTC is already in the list
                        optionEl = document.createElement('option');
                        optionEl.value = timeZone;
                        optionEl.innerText = timeZone;
                        timeZoneSelectorEl.appendChild(optionEl);
                    }
                });
            }, function() {
                // TODO: handle error
            });

            // when the timezone selector changes, dynamically change the calendar option
            timeZoneSelectorEl.addEventListener('change', function() {
                calendar.setOption('timeZone', this.value);
            });
        });

    </script>
    @livewireStyles
</head>

<body>
    <!-- navbar -->
    <nav class="fixed-top navbar navbar-expand-lg p-0" id="nav1">
        <div class="container">
            <a class="navbar-brand " href="/" id="gate">Amor De Roses</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

            </button>

            <form class="form-row1 mx-0">
                <a class="nav-link  m-2 "><i class="fa fa-bars" aria-hidden="true" id="open_sidebar"></i></a>
                <a class="nav-link  m-1 arabic">ع</a>
                <div class="input-field">
                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="search" placeholder="Search" aria-label="Search">
                </div>
                <a class="nav-link micro_show" id="micro" href="/order"><img
                        src="{{ asset('assets/images/bag12.png') }}" class="svg_img_bag" alt="">
                    @if (Cart::count() > 0)
                        <span class="nb_order">{{ Cart::count() }}</span>
                    @endif
                </a>

            </form>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                @livewire('header-search-component')
                <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="d2">
                    <li class="nav-item active">
                        <a class="nav-link" href="/branche">branches <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="/aboutus">About us</a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->ustype === 'ADM')
                                <li class="nav-item active">
                                    <a class="nav-link " href="#">Welcome({{ Auth::user()->name }})</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link " href="{{ route('admin.dashboard') }}">Dashboard</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            @else
                                <li class="nav-item active">
                                    <a class="nav-link " href="#">Welcome({{ Auth::user()->name }})</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                </form>
                            @endif
                        @else
                            <li class="nav-item active">
                                <a class="nav-link " href="{{ route('login') }}">Login</a>
                            </li>
                        @endif
                        @endif
                        <li class="nav-item active">
                            <a class="nav-link " href="#">عربي</a>
                        </li>

                        <li class="nav-item active">
                            <a class="nav-link" href="/order"><img src="{{ asset('assets/css/bag(1).svg') }}"
                                    class="svg_img_bag" alt="">
                                @if (Cart::count() > 0)
                                    <span class="nb_order">{{ Cart::count() }}</span>
                                @else
                                    <span class="nb_order">0</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
        <!-- sidebar -->
        <div class="sidebar">
            <div class="header_sidebar">

                <a class="sidebar_logo">
                    <i class="fa fa-arrow-left p-3" aria-hidden="true" id="close_arrow"></i>
                    <img class="img-fluid rounded-circle" src="{{ asset('assets/images/w8.jpg') }}">
                </a>
                <ul class="list_sidebar">
                    <li>
                        <a><img src="{{ asset('assets/images/track.png') }}">TRACK ORDER</a>
                    </li>
                </ul>
            </div>
            <ul class="nav_sidebar">
                <li>
                    <a href="/">
                        <img src="{{ asset('assets/images/menu.png') }}" alt=""> menue
                        <span>
                            <i arial-hidden="true" class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/branches">
                        <img src="{{ asset('assets/images/location.png') }}" alt=""> branches
                        <span>
                            <i arial-hidden="true" class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/aboutus">
                        <img src="{{ asset('assets/images/information-button.png') }}" alt=""> About us
                        <span>
                            <i arial-hidden="true" class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}">
                        <img src="{{ asset('assets/images/login.png') }}" alt=""> login
                        <span>
                            <i arial-hidden="true" class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </li>
            </ul>
            <ul class="footer_sidebar">
                <li><a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li> <a href="#"><i class=" fa fa-whatsapp"></i></a></li>
            </ul>
            <div class="powered_sidebar">
                Powered By
                <a href="#">MANASIT</a>
            </div>
        </div>

        {{ $slot }}

        <!-- overlay body -->
        <div class="overlay_body"></div>
        <!-- footer  -->
        <footer class="py-3">
            <div class="container">
                <div class="row ">
                    <div class="logo2 col-md-12 py-3">
                        <img class="img-fluid rounded-circle" src="{{ asset('assets/images/w8.jpg') }}">

                    </div>
                </div>
                <div class="row">
                    <div class="text-center atribution col-md-12">
                        <ul>
                            <li>
                                <a href="/">Menue <span class="sr-only">(current)</span></a>
                            </li>
                            <li>
                                <a href="/order-status">orederd status</a>
                            </li>
                            <li>
                                <a href="/aboutus">about us</a>
                            </li>
                            <li>
                                <a href="/branche">contact us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="atribution text-center pt-1">
                    <div class="footer-social-links ">
                        <a href="#"><i class="px-3 fa fa-whatsapp"></i></a>
                        <a href="#"><i class="px-3 fa fa-instagram"></i></a>
                    </div>
                </div>
                <div class="text-center atribution pt-3">
                    <p>Made By abc &copy; 2021. All rights reserved. </p>
                </div>
            </div>
        </footer>
        <script>
            window.jQuery || document.write('<script src="{{ asset('assets/js/jquery-2.1.4.js') }}"><\/script>');

        </script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script>
            function myMap() {
                var mapProp = {
                    center: new google.maps.LatLng(29.241173, 47.968988),
                    zoom: 13,
                    streetViewControl: true,
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,
                        mapTypeIds: ["roadmap", "terrain"],
                    },
                };
                var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                //add marker
                const svgMarker = {
                    path: "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
                    fillColor: "blue",
                    fillOpacity: 0.6,
                    strokeWeight: 0,
                    rotation: 0,
                    scale: 2,
                    anchor: new google.maps.Point(15, 30),
                };

                addMarker({
                    coords: {
                        lat: 29.241173,
                        lng: 47.968988
                    },
                    svgMarker,
                    content: '<h3>gate of flowers</h3>'


                });

                function addMarker(props) {
                    var marker = new google.maps.Marker({
                        position: props.coords,
                        map: map,
                        //icon:props.svgMarker,
                    });

                    if (props.svgMarker) {
                        marker.setIcon(props.svgMarker);

                    }

                    if (props.content) {
                        var infoWindow = new google.maps.InfoWindow({
                            content: props.content
                        })
                    };
                    marker.addListener('click', function() {
                        infoWindow.open(map, marker);
                    })
                }
            }

        </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH6P_CXiC2Goo8dB_ENa_BuoIiIyF2RJ4&callback=myMap">
        </script>

        <script>
            window.jQuery || document.write('<script src="{{ asset('assets/js/jquery-2.1.4.js') }}"><\/script>');

        </script>
        @livewireScripts

    </body>

    </html>
