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

        .panel-heading .accordion-toggle:after {
            /* symbol for "opening" panels */
            font-family: 'Glyphicons Halflings';  /* essential for enabling glyphicon */
            content: "\e114";    /* adjust as needed, taken from bootstrap.css */
            float: right;        /* adjust as needed */
            color: grey;         /* adjust as needed */
        }
        .panel-heading .accordion-toggle.collapsed:after {
            /* symbol for "collapsed" panels */
            content: "\e080";    /* adjust as needed, taken from bootstrap.css */
        }
        strong{
            font-weight: 700;
        }

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
                    <h1>교육 과정</h1>
                </div>
                <div class="container">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title text-left">
                                    <a data-toggle="collapse" class="accordion-toggle" href="#class1">전기 계장 자동제어 실무교육(Commissioning)</a>
                                </h4>
                            </div>
                            <div id="class1" class="panel-collapse collapse in">
                                <div class="panel-body text-left">
                                    <div class="col-md-2"><img data-src="holder.js/140x140" class="img-thumbnail" alt="140x140" src="/common/img/information/education1.jpg" data-holder-rendered="true" style="width: 140px; height: 140px;"></div>
                                    <div class="col-md-10">
                                        <strong class="text-primary">교육 목표</strong><br/>
                                        <small>- 전기 계장분야 자동제어설비의 전문직 양성</small><br/>
                                        <strong class="text-primary">교육 내용</strong><br/>
                                        <small>- 전기 및 계장 전자부분을 이론 강의를 통하여 이해력을 넓히고 또한 실무위주의 교육을 통하여 운전 및 조작을 가능케하고 실습을 함으로 완전 전문인이 되도록하기 위한 교육으로 남녀 구분없이 참여가능 교육이다.</small><br/>
                                        <strong class="text-primary">교육 대상</strong><br/>
                                        <small>- <mark>실업자(일반)</mark></small><br/>
                                        <strong class="text-primary">교육 기간</strong><br/>
                                        <small>- 야간 4개월, 주간 1.5개월</small><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title text-left">
                                    <a data-toggle="collapse" class="accordion-toggle" href="#class2">전기 계장공사 실무교육</a>
                                </h4>
                            </div>
                            <div id="class2" class="panel-collapse collapse in">
                                <div class="panel-body text-left">
                                    <div class="col-md-2"><img data-src="holder.js/140x140" class="img-thumbnail" alt="140x140" src="/common/img/information/education2.jpg" data-holder-rendered="true" style="width: 140px; height: 140px;"></div>
                                    <div class="col-md-10">
                                        <strong class="text-primary">교육 목표</strong><br/>
                                        <small>- 전기 계장공사 전문직 양성</small><br/>
                                        <strong class="text-primary">교육 내용</strong><br/>
                                        <small>- 교육 내용 입니다.</small><br/>
                                        <strong class="text-primary">교육 대상</strong><br/>
                                        <small>- <mark>근로자</mark></small><br/>
                                        <strong class="text-primary">교육 기간</strong><br/>
                                        <small>- 야간 4개월, 주간 1.5개월</small><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--/panel-group -->
                </div><!--/container -->
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