<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>國軍人才招募中心</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ URL::asset('animate/animate.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('animate/set.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tabs.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/tabstyles.css')}}"/>


</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>


@include('index.navbar')


<div id="showcase_show_bg" style="    color: #fff;
        background: url({{URL::asset('images/index/study.jpg')}}) 50% 0 no-repeat fixed;
        padding-top: 300px;
        padding-bottom: 300px;
        background-size: cover;">
    <div class="head-title">
        <span style="display: block;
                     text-align: center;
                     font-size: 100px;
                     color: black;

">升學班隊</span>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-xs-12">
            <div class="tabs tabs-style-bar" style="margin-top: 100px">
                <nav>
                    <ul>
                        <li><a href="#section-bar-1">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>高中</span></a>
                        </li>
                        <li><a href="#section-bar-2">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>士官二專班</span></a>
                        </li>
                        <li><a href="#section-bar-3">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>正期班</span></a>
                        </li>
                    </ul>
                </nav>
                <div class="content-wrap" style="margin-top: 50px">
                    <section id="section-bar-1">
                        @include('study.預校')
                    </section>
                    <section id="section-bar-2">
                        @include('study.陸專')
                        <hr width="100%" style="margin: 70px 0 70px 0 ;">
                        @include('study.海專')
                        <hr width="100%" style="margin: 70px 0 70px 0 ;">
                        @include('study.航技')
                    </section>
                    <section id="section-bar-3">

                    </section>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="margin-top: 100px">

    @include('footer')

</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>

<script type="application/javascript">
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(25.0219888, 121.5221192),
            zoom: 18
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
    }
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBrP2BlfiPZ2QTW_PAG_xKqBPZvRjK9uLQ&callback=myMap"
        async defer></script>


<!-- jquery -->
<script src="{{ URL::asset('jquery.js') }}"></script>

<!-- wow script -->
<script src="{{ URL::asset('wow/wow.min.js') }}"></script>

<!-- boostrap -->
<script src="{{ URL::asset('bootstrap/js/bootstrap.js') }}" type="text/javascript"></script>

<!-- jquery mobile -->
<script src="{{ URL::asset('mobile/touchSwipe.min.js') }}"></script>
<script src="{{ URL::asset('respond/respond.js') }}"></script>

<!-- gallery -->
<script src="{{ URL::asset('gallery/jquery.blueimp-gallery.min.js') }}"></script>

<!-- custom script -->
<script src="{{ URL::asset('script.js') }}"></script>


<script src="{{ URL::asset('js/cbpFWTabs.js') }}"></script>
<script>
    (function () {

        [].slice.call(document.querySelectorAll('.tabs')).forEach(function (el) {
            new CBPFWTabs(el);
        });

    })();
</script>


</body>
</html>