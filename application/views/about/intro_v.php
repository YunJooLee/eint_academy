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
    <?php echo $header;?>
    <!-- Features -->
    <div class="top-container">
        <div class="container">
            <div class="row pull-left">
                <div id="primary" class="content-area col-sm-12 col-md-4 side-menu">
                    <div id="recent-posts-2" class="widget widget_recent_entries">
                        <ul class="">
                            <li class=""><a href="/about/intro" class="active">인사말</a></li>
                            <li class=""><a href="/about/intro">비전</a></li>
                            <li class=""><a href="/about/intro">연혁</a></li>
                            <li class=""><a href="/about/intro">오시는 길</a></li>
                        </ul>
                    </div>
                </div><!-- #primary -->
                <div id="secondary" class="widget-area col-sm-12 col-md-8" role="complementary">
                    <div class="page-header">
                        <h1>Your No.1 Partner</h1>
                    </div>
                    <img src="/common/img/about/intro.jpg">
                    <h3 style="color: #6eba3c;">EI&T Academy에 오신것을 환영합니다.</h3>
                    <p  style="text-align: left;">
                        안녕하세요! EI&T Academy 교육훈련원장입니다. 한국선급 EI&T Academy를 방문하여 주셔서 감사합니다!</br>
                        </br>
                        우리 선급은 세계 5대 선급으로 도약하기 위하여 총력을 기울이고 있으며, EI&T Academy는 이러한 비전의 성공적 달성과 더불어 우리나라 해운, 조선산업 등 관련분야의 인재양성에 이바지 하고자 설립되었습니다.</br>
                        </br>
                        EI&T Academy를 통해 선급업무와 관련된 국제협약 및 선급기술 등 각 분야별 전문지식과 변경사항에 대하여, 축적된 기술력과 교육과정을 바탕으로 해운, 조선업계 종사자들의 니즈를 적극적으로 반영한 교육과정을 개발, 운영해 나가도록 하겠으며, 이를 통해 EI&T Academy는 분야별 최신화된 정보를 학습하고 적용할 수 있는 최고 전문가 학습의 장이 될 수 있도록 하겠습니다.</br>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php echo $footer;?>

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
</body>
</html>