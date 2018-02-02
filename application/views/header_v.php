<!-- Top menu -->
<nav class="navbar navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">EI&T Academy</a>
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
                        <!--<li><a href="/information/refund" style="color:#888;">교육비환급안내</a></li>-->
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
<script>
    function go_information_yearly(){
        window.open("https://docs.google.com/spreadsheets/d/1gJUMUGOGjq_Jl_T7mzUCRZiP3NoO_G8pyxO_jN2LEZc/edit?usp=sharing", "_blank");
    }
</script>