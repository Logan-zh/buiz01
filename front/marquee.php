<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
<?php
    $ad=$Ad->all();
    foreach($ad as $a){
        echo $a['text'].'    ';
    }
?>
</marquee>