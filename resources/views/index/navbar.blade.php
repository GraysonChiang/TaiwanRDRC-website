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

            @if($result['isIndex'])
                <!-- Nav Starts -->
                    <div class="navbar-collapse  collapse">
                        <ul class="nav navbar-nav navbar-right scroll">
                            <li><a href="{{ asset('') }}">回首頁</a></li>
                            <li><a href="#study">升學班隊</a></li>
                            <li><a href="#work">就業班隊</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   style="background-color: transparent;">
                                    職務種類
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#solider">士兵</a></li>
                                    <li><a href="#Sergeant">士官</a></li>
                                    <li><a href="#officer">軍官</a></li>
                                </ul>
                            </li>
                            <li><a href="#benfit">福利待遇</a></li>
                            <li><a href="#register">快速報名</a></li>
                            <li><a href="#location">招募中心</a></li>
                            <li><a href="#contact">聯絡我們</a></li>
                        </ul>
                    </div>
                    <!-- #Nav Ends -->

                @elseif(!$result['isIndex'])

                <!-- Nav Starts -->
                    <div class="navbar-collapse  collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ asset('/') }}">回首頁</a></li>
                            <li><a href="{{ asset('/study') }}">升學班隊</a></li>
                            <li><a href="{{ asset('/work') }}">就業班隊</a></li>
                            <li><a href="{{ asset('/benefit')  }}">福利待遇</a></li>
                            <li><a href="#">快速報名</a></li>
                            <li><a href="#">招募中心</a></li>
                            <li><a href="#">聯絡我們</a></li>
                        </ul>
                    </div>
                @endif


            </div>
        </div>

    </div>
</div>
<!-- #Header Starts -->