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
                <?php echo $side_menu;?>
            </div><!-- #primary -->
            <div id="secondary" class="widget-area col-sm-12 col-md-8" role="complementary">
                <div class="page-header">
                    <h1>오시는 길</h1>
                </div>
                <img style="max-width: fit-content;" src="/common/img/about/come.png">
                <h3 class="text-left">주소</h3>
                <p  style="text-align: left;">
                    <i class="glyphicon glyphicon-home" aria-hidden="true" style="margin-right: 10px;"></i>
                    도로명 : 울산광역시 동구 문현로 90, 2층 EINT Academy</br>
                    <span style="padding-left:30px;">번지 : 울산광역시 동구 방어동 1015-15 2층 EINT Academy</span>
                </p>
                <p  style="text-align: left;">
                    <i class="glyphicon glyphicon-phone-alt" aria-hidden="true" style="margin-right: 10px;"></i>
                    010-9183-6998</br>
                </p>
                <p  style="text-align: left;">
                    <i class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin-right: 10px;"></i>
                    <a href="mailto:#">208yhlee@hanmail.net</a></br>
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