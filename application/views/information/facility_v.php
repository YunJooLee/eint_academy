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

        .classroom_title{
            font-weight: bold;
        }

        .classroom_body{
            font-size: 14px;
            padding-left: 15px;
        }

        .nav-pills>li.classroom1_tab.active>a{
            background-color: #855dab;
        }
        .nav-pills>li.classroom2_tab.active>a{
            background-color: #3c763d;
        }
        .nav-pills>li.classroom3_tab.active>a{
            background-color: #31708f;
        }
        .nav-pills>li.classroom4_tab.active>a{
            background-color: #8a6d3b;
        }
        .nav-pills>li.restroom_tab.active>a{
            background-color: #a94442;
        }

        .panel-purple {
            border-color: #e0c5fb;
        }
        .panel-purple>.panel-heading{
            color: #855dab;
            background-color: #efdfff;
            border-color: #e0c5fb;
        }

        strong { font-weight: 700; }

    </style>
</head>
<body>
<?php echo $header;?>
<!-- Features -->
<div class="top-container">
    <div class="container">
        <div class="row pull-left">

            <div id="secondary" class="widget-area col-sm-12 col-md-12" role="complementary">
                <div class="page-header">
                    <h1>교육 시설</h1>
                </div>

                <div role="tabpanel">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-pills nav-justified" role="tablist">
                        <li role="presentation" class="classroom1_tab active"><a href="#1classroom" aria-controls="1classroom" role="tab" data-toggle="tab">1교육장</a></li>
                        <li role="presentation" class="classroom2_tab"><a href="#2classroom" aria-controls="2classroom" role="tab" data-toggle="tab">2교육장</a></li>
                        <li role="presentation" class="classroom3_tab"><a href="#3classroom" aria-controls="3classroom" role="tab" data-toggle="tab">3교육장</a></li>
                        <li role="presentation" class="classroom4_tab"><a href="#4classroom" aria-controls="4classroom" role="tab" data-toggle="tab">4교육장</a></li>
                        <li role="presentation" class="restroom_tab"><a href="#restroom" aria-controls="restroom" role="tab" data-toggle="tab">휴게실</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane panel panel-purple active" style="margin-top: 15px;" id="1classroom">
                            <div class="panel-heading classroom_title">강의실</div>
                            <div class="panel-body" style="text-align: left;">
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>시설 안내</strong>
                                <p class="classroom_body">
                                    - 이곳은 1교육장 입니다.<br/>
                                    - 면적 : 100㎡<br/>
                                    - 좌석 : 100 석<br/>
                                </p>
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>사진</strong>
                                <p class="classroom_body">

                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane panel panel-success" style="margin-top: 15px;" id="2classroom">
                            <div class="panel-heading classroom_title">전기 실습실</div>
                            <div class="panel-body" style="text-align: left;">
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>시설 안내</strong>
                                <p class="classroom_body">
                                    - 이곳은 2교육장 입니다.<br/>
                                    - 면적 : 100㎡<br/>
                                    - 좌석 : 100 석<br/>
                                </p>
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>사진</strong>
                                <p class="classroom_body">

                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane panel panel-info" style="margin-top: 15px;" id="3classroom">
                            <div class="panel-heading classroom_title">기계 실습실 1</div>
                            <div class="panel-body" style="text-align: left;">
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>시설 안내</strong>
                                <p class="classroom_body">
                                    - 이곳은 3교육장 입니다.<br/>
                                    - 면적 : 100㎡<br/>
                                    - 좌석 : 100 석<br/>
                                </p>
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>사진</strong>
                                <p class="classroom_body">

                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane panel panel-warning" style="margin-top: 15px;" id="4classroom">
                            <div class="panel-heading classroom_title">기계 실습실 2</div>
                            <div class="panel-body" style="text-align: left;">
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>시설 안내</strong>
                                <p class="classroom_body">
                                    - 이곳은 4교육장 입니다.<br/>
                                    - 면적 : 100㎡<br/>
                                    - 좌석 : 100 석<br/>
                                </p>
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>사진</strong>
                                <p class="classroom_body">

                                </p>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane panel panel-danger" style="margin-top: 15px;" id="restroom">
                            <div class="panel-heading classroom_title">휴게실</div>
                            <div class="panel-body" style="text-align: left;">
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>시설 안내</strong>
                                <p class="classroom_body">
                                    - 이곳은 휴게실 입니다.<br/>
                                    - 면적 : 100㎡<br/>
                                    - 좌석 : 100 석<br/>
                                </p>
                                <span class="glyphicon glyphicon-triangle-right"></span> <strong>사진</strong>
                                <p class="classroom_body">

                                </p>
                            </div>
                        </div>
                    </div>

                </div>



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