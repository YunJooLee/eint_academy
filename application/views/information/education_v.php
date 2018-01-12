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

            <div id="secondary" class="widget-area col-sm-12 col-md-8" role="complementary">
                <div class="page-header">
                    <h1>교육 과정</h1>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xs-18 col-sm-6 col-md-3">
                            <div class="img-thumbnail">
                                <img src="http://placehold.it/500x250/EEE">
                                <div class="caption" style="padding:15px;">
                                    <h4>전기 제어 현장 실무 교육</h4>
                                    <p class="text-left" style="padding-top:15px;min-height:130px;">조선 해양 퇴직자 및 실업자 대상 전기제어 현장 실무 교육</br></br></p>
                                    <a href="#" class="btn btn-info btn-lg" role="button">신청하기</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-18 col-sm-6 col-md-3">
                            <div class="img-thumbnail">
                                <img src="http://placehold.it/500x250/EEE">
                                <div class="caption" style="padding:15px;">
                                    <h4>전기 계장공사 실무 교육</h4>
                                    <p class="text-left" style="padding-top:15px;min-height:130px;">조선해양분야 근로자 전기 계장공사 실무 교육</br></br></p>
                                    <a href="#" class="btn btn-info btn-lg" role="button">신청하기</a>
                                </div>
                            </div>
                        </div>
                    </div><!--/row-->
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