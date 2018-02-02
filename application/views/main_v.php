<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Navbar Menu Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
    <link rel="stylesheet" href="/common/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/common/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/common/css/animate.css">
    <link rel="stylesheet" href="/common/css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="/common/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/common/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/common/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/common/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/common/ico/apple-touch-icon-57-precomposed.png">
    <style>

        .nav .open>a{
            background-color: transparent;
        }
        .nav .open>a:focus{
            background-color: transparent;
        .dropdown-menu{
            display: block;
        }
        }
        .nav .open>a:hover{
            background-color: transparent;
        .dropdown-menu{
            display: block;
        }
        }

        .navbar-right .dropdown-menu{
            left:0;
            min-width: 230px;
        }

    </style>
</head>

<body>

<!-- Top menu -->
<nav class="navbar navbar-fixed-top navbar-no-bg" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">EI&T Academy</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-navbar-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-triangle-bottom"></span> About</a>
                    <ul class="dropdown-menu">
                        <li><a href="/about/intro" style="color:#888;">인사말</a></li>
                        <li><a href="/about/vision" style="color:#888;">비전</a></li>
                        <li><a href="/about/history" style="color:#888;">연혁</a></li>
                        <li><a href="/about/come" style="color:#888;">오시는길</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-triangle-bottom"></span> Infomation</a>
                    <ul class="dropdown-menu">
                        <li><a href="/information/education" style="color:#888;">교육과정 소개</a></li>
                        <li><a style="color:#888;cursor: pointer;" onclick="go_information_yearly();">연간교육안내</a></li>
                        <li><a href="/information/refund" style="color:#888;">교육비환급안내</a></li>
                        <li><a href="/information/facility" style="color:#888;">교육시설소개</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-triangle-bottom"></span> Education</a>
                    <ul class="dropdown-menu">
                        <li><a href="/education/apply_way" style="color:#888;">교육신청절차</a></li>
                        <li><a href="/education/apply" style="color:#888;">교육신청</a></li>
                        <li><a href="/education/apply_state" style="color:#888;">교육접수현황</a></li>
                    </ul>
                </li>
                <!--<li><a href="#">Faq</a></li>-->
                <li><a class="btn btn-link-3" href="#">Login</a></li>
                <li><a class="btn btn-link-3" href="#">Join</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class="top-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text wow fadeInLeft">
                <h1>Electronic, Instrument And Telephone Academy</h1>
                <div class="description">
                    <p class="medium-paragraph">
                        조선 해양 최고의 명장 아래 끊임없는 교육으로 세계 최고의 품질과 기술력을 선도합니다
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features -->
<div class="features-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 features section-description wow fadeIn">
                <h2>환영합니다</h2>
                <div class="divider-1"><div class="line"></div></div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-twitter"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>교육신청 절차 안내</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-instagram"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>연간교육 일정 안내</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-magic"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>교육 문의</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 features-box wow fadeInLeft">
                <div class="row">
                    <div class="col-sm-3 features-box-icon">
                        <i class="fa fa-cloud"></i>
                    </div>
                    <div class="col-sm-9">
                        <h3>교육시설소개</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                            Ut wisi enim ad minim veniam, quis nostrud.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 footer-copyright">
                &copy; EI&T Academy</a>
            </div>
        </div>
    </div>
</footer>


<!-- Javascript -->
<script src="/common/js/jquery-1.11.1.min.js"></script>
<script src="/common/bootstrap/js/bootstrap.min.js"></script>
<script src="/common/js/jquery.backstretch.min.js"></script>
<script src="/common/js/wow.min.js"></script>
<script src="/common/js/retina-1.1.0.min.js"></script>
<script src="/common/js/waypoints.min.js"></script>
<script src="/common/js/scripts.js"></script>

<!--[if lt IE 10]>
<script src="/common/js/placeholder.js"></script>
<![endif]-->
<script>
    function go_information_yearly(){
        window.open("https://docs.google.com/spreadsheets/d/1gJUMUGOGjq_Jl_T7mzUCRZiP3NoO_G8pyxO_jN2LEZc/edit?usp=sharing", "_blank");
    }
</script>
</body>

</html>