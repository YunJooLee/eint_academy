<?php
    $active['intro'] = ($page === 'intro') ? 'class="active"' : '';
    $active['vision'] = ($page === 'vision') ? 'class="active"' : '';
    $active['history'] = ($page === 'history') ? 'class="active"' : '';
    $active['come'] = ($page === 'come') ? 'class="active"' : '';
?>
<div id="recent-posts-2" class="widget widget_recent_entries">
    <ul class="">
        <li class=""><a href="/about/intro" <?php echo $active['intro']; ?>>인사말</a></li>
        <li class=""><a href="/about/vision" <?php echo $active['vision']; ?>>비전</a></li>
        <li class=""><a href="/about/history" <?php echo $active['history']; ?>>연혁</a></li>
        <li class=""><a href="/about/come" <?php echo $active['come']; ?>>오시는 길</a></li>
    </ul>
</div>