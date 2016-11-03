<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Cyrus Studio</title>

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- font awesome -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.min.css') }}"/>

    <!-- animate.css -->
    <link rel="stylesheet" href="{{ URL::asset('animate/animate.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('animate/set.css') }}"/>

    <!-- gallery -->
    <link rel="stylesheet" href="{{ URL::asset('gallery/blueimp-gallery.min.css') }}">

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ URL::asset('images/favicon.ico')}}" type="image/x-icon">


    <link rel="stylesheet" href="{{ URL::asset('style.css') }}">






</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
    <div class="container-fluid">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
            <div class="container">
                <div class="navbar-header">
                    <!-- Logo Starts -->
                    <a class="navbar-brand" href="#home" style="font-size: 30px">國軍人才招募中心
                    </a>
                    <!-- #Logo Ends -->

                    <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse"
                            data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>


                <!-- Nav Starts -->
                <div class="navbar-collapse  collapse">
                    <ul class="nav navbar-nav navbar-right scroll">
                        <li class="active">
                            <a href="#home">Home</a>
                        </li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#works">Works</a></li>
                        <li><a href="#partners">Partners</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <!-- #Nav Ends -->

            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->














<div id="home">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider animated flipInX" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{ URL::asset('images/slide/2.jpg') }}" alt="banner">
                <div class="carousel-caption">
                    <div class="caption-wrapper">
                        <div class="caption-info">
                            <h1 class="animated bounceInLeft" style="font-size: 100px;">國軍人才招募中心</h1>
                            <p class="animated bounceInRight" style="font-size: 40px;">開啟人生，無限可能</p>
                            <div class="scroll animated fadeInUp">
                                <a href="#choice" class="btn btn-default">
                                    <i class="fa fa-flask"></i>
                                    GETTING START
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #Item 1 -->

            <!-- Item 1 -->
            <div class="item">
                <img src="{{ URL::asset('images/slide/1.jpg') }}" alt="banner">
                <div class="carousel-caption">
                    <div class="caption-wrapper">
                        <div class="caption-info">
                            <h1 class="animated bounceInLeft" style="font-size: 100px;">國軍人才招募中心</h1>
                            <p class="animated bounceInRight" style="font-size: 40px;">加入我們，是您最好的選擇</p>
                            <div class="scroll animated fadeInUp">
                                <a href="#choice" class="btn btn-default">
                                    <i class="fa fa-flask"></i>GETTING START
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #Item 1 -->
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i style="display: block;margin-top: 350px; font-size: 100px;" class="fa fa-angle-left"></i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i style="display: block;margin-top: 350px; font-size: 100px;" class="fa fa-angle-right"></i>
        </a>
    </div>
    <!-- #Slider Ends -->
</div>


<div id="choice" class="container spacer ">
    <div class="row">
        <div class="col-lg-12 wowload fadeInLeft">
            <div class="process">
                <h2 class="text-center wowload fadeInUp">
                    快速選擇
                </h2>
                <hr style="border: 1px solid lightgray; margin-top: 10px;" >
                <ul class="row text-center list-inline  wowload bounceInUp" style="margin-top: 100px; margin-bottom: 400px">
                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <div class="scroll animated fadeInUp">

                        <span style="font-size: 25px">
                            <a href="#study" style="text-decoration: none;">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            <b>升學</b>
                                </a>
                        </span>
                        </div>
                    </li>
                    <li style="height: 15em;width: 15em; line-height: 22em;">

                        <div class="scroll animated fadeInUp">
                            <span style="font-size: 25px">
                                    <a href="#work" style="text-decoration: none;">
                                    <i class="fa fa-user" aria-hidden="true"></i><b>就業</b>
                                    </a>
                            </span>
                        </div>
                    </li>
                    <li style="height: 15em;width: 15em; line-height: 22em;">
                        <span style="font-size: 25px">
                            <i class="fa fa-hospital-o" aria-hidden="true"></i><b>體檢</b>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>










<div id="study">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{URL::asset('images/index/study.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="caption-wrapper" style="text-align: left;text-shadow: none;">
                        <div class="caption-info">

                            <div style="width: 50%;
                            height: 500px;
                            background-color: rgba(255,255,255,0.6);
                            padding: 40px;
                            margin: 0 auto;">
                                <h1 class="animated bounceInLeft"
                                    style="font-size: 50px; color: black; text-align: center">升學班隊</h1>
                                <hr style="border: 1px solid #999999;">

                                <span style="font-size: 20px;line-height: 50px; color: black">
                                    軍事院校是培育國軍領導幹部的搖籃，一貫的教育理念採「哲學、科學及兵學」並重之「文武合一」教育，其內涵以人格教育、智能教育、軍事訓練、體能鍛鍊為主。<br>
                                    學校：中正預校<br>
                                    陸軍專科學校、海軍官校二專班、空軍航空技術學院<br>
                                    陸軍官校、空軍官校、海軍官校、國防大學 <br>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #Slider Ends -->
</div>


<div id="work">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{URL::asset('images/index/work.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="caption-wrapper" style="text-align: left;text-shadow: none;">
                        <div class="caption-info">

                            <div style="width: 50%;
                            height: 500px;
                            background-color: rgba(255,255,255,0.6);
                            padding: 40px;
                            margin: 0 auto;">
                                <h1 class="animated bounceInLeft"
                                    style="font-size: 50px; color: black; text-align: center">就業班隊</h1>
                                <hr style="border: 1px solid #999999;">
                                <span style="font-size: 20px;line-height: 50px; color: black">
                                    簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介簡介
                                    <br>
                                    相關班隊：志願役士兵<br>
                                    專業專（士）官班、飛行常備軍官班<br>大學儲備軍官訓練團、軍情局專業士官班<br>
                                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #Slider Ends -->
</div>









<!-- works -->
<div id="works" class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/1.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Adidas</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/1.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/2.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Jeans</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/2.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/3.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Metal</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/3.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/4.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Vintage</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/4.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>


</div>
<!-- works -->


<!-- What we do -->
<div class="what-we-do-container section-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 what-we-do section-description wow fadeIn">
                <h2>What we do</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 what-we-do-box wow fadeInUp">
                <div class="what-we-do-box-icon"><i class="fa fa-pencil"></i></div>
                <h3>Web design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="col-sm-4 what-we-do-box wow fadeInDown">
                <div class="what-we-do-box-icon"><i class="fa fa-gears"></i></div>
                <h3>Development</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
            <div class="col-sm-4 what-we-do-box wow fadeInUp">
                <div class="what-we-do-box-icon"><i class="fa fa-twitter"></i></div>
                <h3>Social media</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
            </div>
        </div>
    </div>
</div>














<div class="container-fluid" id="soldier" style="margin-top: 150px">
    <div class="row ">
        <div class="col-lg-6">
            <div style="width: 499px;
                            height: 500px;
                            background-color: #F8F8F8;
                            display: inline-block;
                            float: left;
                            margin-top: 100px;
                            margin-left: -100px;
                            padding: 40px;">

                <span>
                <h1 style="font-size: 50px; color: #999999; text-align: center">士兵</h1></span>
                <hr style="border: 1px solid #999999; ">

                <span style="font-size: 20px;line-height: 50px;">
                    薪資待遇：33,625/月<br>
                    服役時間：4年<br>
                    工作性質：於單位內工作穩定，容易培養一技之長，方便未來就業。<br>
                    適合班隊：志願役士兵
                </span>


            </div>
        </div>
        <div class="col-lg-6">

            <img src="{{URL::asset('images/index/士兵.png')}}" alt="">
        </div>
    </div>
</div>


<div id="NCO">
    <!-- Slider Starts -->
    <div id="myCarousel" class="carousel slide banner-slider" data-ride="carousel">
        <div class="carousel-inner">
            <!-- Item 1 -->
            <div class="item active">
                <img src="{{URL::asset('images/index/士官.jpg')}}" alt="">
                <div class="carousel-caption">
                    <div class="caption-wrapper" style="text-align: left;text-shadow: none;">
                        <div class="caption-info">

                            <div style="width: 499px;
                            height: 500px;
                            background-color: rgba(255,255,255,0.6);
                            display: inline-block;
                            float: right;
                            margin-right: 200px;
                            padding: 40px;">
                                <h1 class="animated bounceInLeft"
                                    style="font-size: 50px; color: #999999; text-align: center">士官</h1>
                                <hr style="border: 1px solid #999999;">

                                <span style="font-size: 20px;line-height: 50px; color: black">
                    薪資待遇：39,325/月<br>
                    服役時間：3-6年<br>
                    工作性質：工作性質稍具挑戰性，需要帶領士兵從事不同任務，適合喜歡挑戰性工作者前往<br>
                    適合班隊：陸海空軍二專班、專業軍（士）官班、大專考選預備軍（士）官班
                </span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #Slider Ends -->
</div>


<div class="container-fluid" style="margin-top: 150px;" id="officer">
    <div class="row">
        <div class="col-lg-6">
            <div style="width: 499px;
                            height: 500px;
                            background-color: #F8F8F8;
                            display: inline-block;
                            float: left;
                            margin-top: 150px;
                            margin-left: -100px;
                            padding: 40px;">
                <span>
                <h1 style="font-size: 50px; color: #999999; text-align: center">軍官</h1></span>
                <hr style="border: 1px solid #999999; width: 80%;">
                <span style="font-size: 20px;line-height: 50px;">
                    薪資待遇：45,835/月<br>
                    服役時間：4-14年<br>
                    工作性質：須具備領導統御能力，具有非常大的挑戰性。<br>
                    適合班隊：軍事院校正期班、專業軍（士）官班、飛行常備軍官班、大專考選預備軍（士）官班
                </span>

            </div>
        </div>
        <div class="col-lg-6">

            <img src="{{URL::asset('images/index/軍官.png')}}" alt="">

        </div>
    </div>
</div>


<div class="container-fluid" style="margin-top: 150px">


    <div class="row" style="margin-top: 50px">
        <div class=" col-lg-4 wowload fadeInLeft">
            <h4>
                <i class="fa fa-paint-brush">
                </i> 國防部人才招募中心
                <hr style="border: 1px solid lightgray">
            </h4>
            <span>
                地址：臺北市大安區基隆路二段 207號2樓<br><br>
                電話：(0800)000-050<br><br>
            </span>
        </div>
        <div class=" col-lg-8 wowload fadeInLeft">
            <h4>
                服務項目
                <hr style="border: 1px solid lightgray">


            </h4>
            <span>
                一、開放時間：週一至週五上午七時至下午八時止，週六、日 ( 國定假日 ) 上午八時至下午五時。<br><br>
二、國軍各班隊招募、報名日期、錄取人數、考試科目、入學(伍)等訊息。<br><br>
三、國軍薪資、福利、待遇等諮詢。<br><br>
四、海報資料及簡介索取。<br><br>
五、舉辦各學校招募說明座談會。<br><br>
六、各展場及活動場所提供宣導。<br><br>
七、安排參加軍事單位及軍事院校參觀或體驗活動。<br><br>
            </span>
        </div>
    </div>


    <div class="row" style="margin-top: 50px">
        <div class="col-lg-4 wowload fadeInLeft">
            <h4>
                北部地區人才招募中心
                <hr style="border: 1px solid lightgray">

            </h4>
            <span style="line-height: 25px">
                諮詢專線：02-23643837  <br>地址：臺北市中正區羅斯福路三段56號<br><br>
                基隆招募站：02-24654442　<br>地址：基隆市信義區正信路203號<br><br>
                龍岡招募站：03-4609943 　<br>地址：桃園市中壢區龍南路1號(龍岡圓環)<br><br>
                新竹招募站：03-5745068 　<br>地址：新竹市光復路二段800號<br><br>
                宜蘭招募站：03-9310554 　<br>地址：宜蘭市環河路30號<br><br>
                花蓮招募站：03-8322645 　<br>地址：花蓮市水源街8-1號<br><br>
                金門招募站：082-330938 　<br>地址：金門縣金湖鎮新市里自強路21號<br><br>
                連江招募站：0836-23618 　<br>地址：南竿郵政90663附4號信箱(南竿鄉莒光辦事處)<br><br>
                澎湖招募站：06-9261022 　<br>地址：澎湖縣馬公市民生路36號<br><br>
            </span>
        </div>

        <div class="col-lg-4 wowload fadeInLeft">
            <h4>
                中部地區人才招募中心
                <hr style="border: 1px solid lightgray">

            </h4>
            <span style="line-height: 25px">

           諮詢專線：04-22151813    <br>地址：臺中市東區自由路三段30號<br><br>
           苗栗招募站：037-325866 　<br>地址：苗栗市府前路56號<br><br>
           豐原招募站：04-25280435　<br>地址：臺中市豐原區三豐路一段382號<br><br>
           彰化招募站：04-7277770　 <br>地址：彰化市卦山路14號<br><br>
           南投招募站：049-2208599　<br>地址：南投市民族路512號<br><br>
           雲林招募站：05-5343084 　<br>地址：雲林縣斗六市莊敬路347巷28號<br><br>
           嘉義招募站：05-2287096 　<br>地址：嘉義市民權路295號<br><br>

       </span>


        </div>

        <div class="col-lg-4 wowload fadeInLeft">
            <h4>
                南部地區人才招募中心
                <hr style="border: 1px solid lightgray">

            </h4>
            <span style="line-height: 25px">
            諮詢專線：07-5830076 <br>地址：高雄市左營區自立新村201號<br><br>
            臺南招募站：06-2826768 <br>地址：臺南市北區長榮路五段393號<br><br>
            臺南仁德招募站：06-3366158#973035 <br>地址：臺南市仁德區保仁路195號<br><br>
            高雄招募站：07-5830097　<br>地址：高雄市左營區自立新村201號<br><br>
            鳳山招募站：07-7407941　<br>地址：高雄市鳳山區和平路102號<br><br>
            屏東招募站：08-7519826　<br>地址：屏東市建國路151號<br><br>
            臺東招募站：089-349791　<br>地址：臺東市博愛路261號<br><br>


        </span>
        </div>


    </div>
</div>





<!-- works -->
<div id="works" class=" clearfix grid">
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/1.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Adidas</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/1.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/2.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Jeans</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/2.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/3.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Metal</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/3.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/4.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Vintage</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/4.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/5.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Typers</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/5.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>

    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/6.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Marco</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/6.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/7.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Chinese</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/7.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>
    <figure class="effect-oscar  wowload fadeInUp">
        <img src="{{ URL::asset('images/portfolio/8.jpg') }}" alt="img01"/>
        <figcaption>
            <h2>Dicrap</h2>
            <p>Lily likes to play with crayons and pencils<br>
                <a href="{{ URL::asset('images/portfolio/8.jpg') }}" title="1" data-gallery>View more</a></p>
        </figcaption>
    </figure>


</div>
<!-- works -->


<div id="partners" class="container spacer ">
    <h2 class="text-center  wowload fadeInUp">Some of our happy clients</h2>
    <div class="clearfix">
        <div class="col-sm-6 partners  wowload fadeInLeft">
            <img src="{{ URL::asset('images/partners/1.jpg') }}" alt="partners">
            <img src="{{ URL::asset('images/partners/2.jpg') }}" alt="partners">
            <img src="{{ URL::asset('images/partners/3.jpg') }}" alt="partners">
            <img src="{{ URL::asset('images/partners/4.jpg') }}" alt="partners">
        </div>
        <div class="col-sm-6">


            <div id="carousel-testimonials" class="carousel slide testimonails  wowload fadeInRight"
                 data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/1.jpg"
                                                                        width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p> I must explain to you how all this mistaken idea of denouncing pleasure and praising
                                pain was born and I will give you a complete account of the system, and expound the
                                actual teachings of the great explorer of the truth, the master-builder of human
                                happiness. </p>
                            <span>Angel Smith - <b>eshop Canada</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft col-xs-2"><img alt="portfolio" src="images/team/2.jpg"
                                                                        width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p>No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because
                                those who do not know how to pursue pleasure rationally encounter consequences that are
                                extremely painful.</p>
                            <span>John Partic - <b>Crazy Pixel</b></span>
                        </div>
                    </div>
                    <div class="item  animated bounceInRight row">
                        <div class="animated slideInLeft  col-xs-2"><img alt="portfolio" src="images/team/3.jpg"
                                                                         width="100" class="img-circle img-responsive">
                        </div>
                        <div class="col-xs-10">
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so
                                beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire,
                                that they cannot foresee the pain and trouble that are bound to ensue.</p>
                            <span>Harris David - <b>Jet London</b></span>
                        </div>
                    </div>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                    <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                </ol>
                <!-- Indicators -->
            </div>


        </div>
    </div>


    <!-- team -->
    <h3 class="text-center  wowload fadeInUp">Our team</h3>
    <p class="text-center  wowload fadeInLeft">Our creative team that is making everything possible</p>
    <div class="row grid team  wowload fadeInUpBig">
        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/8.jpg" alt="img01" class="img-responsive"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/10.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/12.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>

        <div class=" col-sm-3 col-xs-6">
            <figure class="effect-chico">
                <img src="images/team/17.jpg" alt="img01"/>
                <figcaption>
                    <p><b>Barbara Husto</b><br>Senior Designer<br><br><a href="#"><i class="fa fa-dribbble"></i></a> <a
                                href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i
                                    class="fa fa-twitter"></i></a></p>
                </figcaption>
            </figure>
        </div>


    </div>
    <!-- team -->

</div>


<!-- About Starts -->
<div class="highlight-info">
    <div class="overlay spacer">
        <div class="container">
            <div class="row text-center  wowload fadeInDownBig">
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-smile-o  fa-5x"></i><h4>上線人數 <br> 24</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-rocket  fa-5x"></i><h4>瀏覽人數<br> 743</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-cloud-download  fa-5x"></i><h4>報名人數 <br> 414</h4>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <i class="fa fa-map-marker fa-5x"></i><h4>體檢人數 <br> 1144</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About Ends -->


<div id="contact" class="spacer">
    <!--Contact Starts-->
    <div class="container contactform center">

        <div class="row wowload fadeInLeftBig" style="margin-top: 50px">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">

                <h2 class="text-center  wowload fadeInUp" style="margin: 0px">聯絡我們</h2>
                <hr style="border: 1px solid lightgray; width: 100% ">

                <span style="text-align: center;font-size: 16px;">
                    如有任何疑問，請留下您的正確資料，我們會在最短的時間內與您聯繫
                </span>
            </div>
        </div>

        <div class="row wowload fadeInLeftBig" style="margin-top: 50px">
            <div class="col-sm-6 col-sm-offset-3 col-xs-12">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Company">
                <textarea rows="5" placeholder="Message"></textarea>
                <button class="btn btn-primary">
                    <i class="fa fa-paper-plane"></i>
                    Send
                </button>
            </div>
        </div>


    </div>
</div>
<!--Contact Ends-->


<!-- Footer Starts -->
<div class="footer text-center spacer">
    <p class="wowload flipInX"><a href="#">
            <i class="fa fa-facebook fa-2x"></i></a> <a href="#">
            <i class="fa fa-dribbble fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i>
        </a>
        <a href="#"><i class="fa fa-linkedin fa-2x"></i></a></p>
    Copyright 2014 Cyrus Creative Studio. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
</div>


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