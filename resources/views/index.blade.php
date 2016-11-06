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


</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>


@include('index.navbar')


<div id="home">
@include('index.slider')
</div>


<div id="choice" class="container-fluid spacer ">
@include('index.choose')
</div>

<div id="study">
@include('index.study')
</div>


<div id="work">
@include('index.work')
</div>


@include('index.jobtype')



<div id="benfit">
@include('index.benfit')
</div>



<div id="location">

@include('index.location')

</div>



<div id="status">

@include('index.status')

</div>





<div id="contact" class="spacer">
@include('index.contact');
</div>


<div id="googleMap">
{{--<div id="map" style="width:100%;height:500px"></div>--}}
</div>

@include('footer')

<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>

<script type="application/javascript">
    function myMap() {
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(25.0219888,121.5221192),
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


</body>
</html>