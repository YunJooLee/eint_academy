<?php
$active['education'] = ($page === 'education') ? 'class="active"' : '';
$active['yearly'] = ($page === 'yearly') ? 'class="active"' : '';
$active['refund'] = ($page === 'refund') ? 'class="active"' : '';
$active['facility'] = ($page === 'facility') ? 'class="active"' : '';
?>
<div id="recent-posts-2" class="widget widget_recent_entries">
    <ul class="">
        <li class=""><a href="/information/education" <?php echo $active['education']; ?>>교육과정소개</a></li>
        <li class=""><a href="/information/yearly" <?php echo $active['yearly']; ?>>연간교육안내</a></li>
        <li class=""><a href="/information/refund" <?php echo $active['refund']; ?>>교육비환급안내</a></li>
        <li class=""><a href="/information/facility" <?php echo $active['facility']; ?>>교육시설소개</a></li>
    </ul>
</div>