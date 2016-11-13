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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">


</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>


@include('index.navbar')


<div id="showcase_show_bg" style="    color: #fff;
        background: url({{URL::asset('images/index/benfit.jpg')}}) 50% 0 no-repeat fixed;
        padding-top: 300px;
        padding-bottom: 300px;
        background-size: cover;">
    <div class="head-title">
        <span style="display: block;
                     text-align: center;
                     font-size: 100px;
                     color: black;

">福利待遇</span>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 hidden-xs ">
            <div class="tabs tabs-style-bar" style="margin-top: 100px">
                <nav>
                    <ul>
                        <li>
                            <a href="#section-bar-0">
                                <i class="fa fa-money" aria-hidden="true"></i>
                                <span>薪資待遇</span></a>
                        </li>
                        <li>
                            <a href="#section-bar-1">
                                <i class="fa fa-tint" aria-hidden="true"></i>
                                <span>水價補助</span></a>
                        </li>
                        <li><a href="#section-bar-2">
                                <i class="fa fa-bolt" aria-hidden="true"></i>
                                <span>電價補助</span></a>
                        </li>
                        <li>
                            <a href="#section-bar-3">
                                <i class="fa fa-male" aria-hidden="true"></i>
                                <i class="fa fa-female" aria-hidden="true"></i>
                                <span>結婚補助</span></a>
                        </li>
                        <li>
                            <a href="#section-bar-4">
                                <i class="fa fa-venus-mars" aria-hidden="true"></i>
                                <span>生育補助</span></a>
                        </li>
                        <li>
                            <a href="#section-bar-5">
                                <i class="fa fa-bed" aria-hidden="true"></i>
                                <span>喪事補助</span></a>
                        </li>
                        <li>
                            <a href="#section-bar-6">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                <span>醫療補助</span></a>
                        </li>
                        <li>
                            <a href="#section-bar-7">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <span>進修補助</span></a>
                        </li>
                    </ul>
                </nav>
                <div class="content-wrap" style="margin-top: 50px">
                    <section id="section-bar-0">
                        @include('benefit.money')
                    </section>
                    <section id="section-bar-1">
                        @include('benefit.water')
                    </section>
                    <section id="section-bar-2">
                        @include('benefit.elec')

                    </section>
                    <section id="section-bar-3">
                        @include('benefit.marry')
                    </section>
                    <section id="section-bar-4">
                        @include('benefit.baby')
                    </section>
                    <section id="section-bar-5">
                        @include('benefit.die')
                    </section>
                    <section id="section-bar-6">
                        @include('benefit.hospitle')
                    </section>
                    <section id="section-bar-7">
                        @include('benefit.study')
                    </section>
                </div>
            </div>
        </div>
        <div class="hidden-lg col-xs-12" style="padding: 0px; margin-top: 10px;">
            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-0">
                <i class="fa fa-money" aria-hidden="true"></i><span>薪資待遇</span>
            </button>
            <div id="btn-bar-0" class="collapse">
                @include('benefit.money')
            </div>
        </div>
        <div class="hidden-lg col-xs-12" style="padding: 0px; margin-top: 10px;">
            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-1">
                <i class="fa fa-tint" aria-hidden="true"></i><span>水價補助</span>
            </button>
            <div id="btn-bar-1" class="collapse">
                @include('benefit.water')
            </div>
        </div>

        <div class="hidden-lg col-xs-12" style="padding: 0px;">
            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-2">
                <i class="fa fa-bolt" aria-hidden="true"></i><span>電價補助</span>
            </button>
            <div id="btn-bar-2" class="collapse">
                @include('benefit.elec')
            </div>
        </div>
        <div class="hidden-lg col-xs-12" style="padding: 0px;">
            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-3">
                <i class="fa fa-male" aria-hidden="true"></i>
                <i class="fa fa-female" aria-hidden="true"></i>
                <span>結婚補助</span>
            </button>
            <div id="btn-bar-3" class="collapse">
                @include('benefit.marry')
            </div>
        </div>
        <div class="hidden-lg col-xs-12" style="padding: 0px;">
            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-4">
                <i class="fa fa-venus-mars" aria-hidden="true"></i><span>生育補助</span>
            </button>
                <div id="btn-bar-4" class="collapse">
                    @include('benefit.baby')
                </div>
        </div>
        <div class="hidden-lg col-xs-12" style="padding: 0px;">
            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-5">
                <i class="fa fa-bed" aria-hidden="true"></i><span>喪事補助</span>
            </button>
            <div id="btn-bar-5" class="collapse">
                @include('benefit.die')
            </div>
        </div>
        <div class="hidden-lg col-xs-12" style="padding: 0px;">
            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-6">
                <i class="fa fa-plus" aria-hidden="true"></i><span>醫療補助</span>
            </button>
            <div id="btn-bar-6" class="collapse">

                @include('benefit.hospitle')
            </div>
        </div>
        <div class="hidden-lg col-xs-12" style="padding: 0px;">

            <button type="button" class="btn btn-primary rdrc-btn" data-toggle="collapse" data-target="#btn-bar-7">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>進修補助</span>
            </button>

            <div id="btn-bar-7" class="collapse">
                @include('benefit.study')
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