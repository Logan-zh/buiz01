<div class="di"
    style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
    <marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
    </marquee>
	<div style="height:32px; display:block;">
	<?php include 'front/marquee.php'; ?>
	</div>
    <!--正中央-->
    <span class="t botli">更多最新消息顯示區</span>
    <ul class="ssaa" style="list-style-type:decimal;">
        <?php
            $now=(!empty($_GET['p']))?$_GET['p']:1;
            $div=5;
            $pages=ceil(count($News->all(['sh'=>1]))/$div);
            $start=($now-1)*$div;
            $news=$News->all(['sh'=>1]," limit $start ,$div");
            foreach($news as $n){
                echo "<li>".mb_substr($n['text'],0,10);
                echo "<span class='all' style='display:none'>".$n['text']."</span>";
                echo "</li>";
            }
        ?>
    </ul>
    <div id="altt"
            style="position: absolute; width: 350px; min-height: 100px; background-color: rgb(255, 255, 204); top: 50px; left: 130px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
    </div>
    <div style="text-align:center;">
        <?php
            if($now-1>0){   ?>
            <a class="bl" style="font-size:30px;" href="?do=news&p=<?=($now-1)?>">&lt;&nbsp;</a>
        <?php  }

        for($i=1;$i<=$pages;$i++){ 
            $size=($now==$i)?'30px':'20px';
        ?>
            <a class="bl" style="font-size:<?=$size?>" href="?do=news&p=<?=$i?>"><?=$i?></a>
        <?php }
        ?>

        <?php
            if($now+1<=$pages){   ?>
            <a class="bl" style="font-size:30px;" href="?do=news&p=<?=($now+1)?>">&nbsp;&gt;</a>
        <?php  }
        ?>
    </div>
</div>

<script>
        $(".ssaa li").hover(
            function() {
                $("#altt").html("<pre>" + $(this).children(".all").html() + "</pre>")
                $("#altt").show()
            }
        )
        $(".ssaa li").mouseout(
            function() {
                $("#altt").hide()
            }
        )
</script>