<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">校園映像資料管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">校園映像資料圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="10%"></td>
                </tr>
                <?php
                        $now=(!empty($_GET['p']))?$_GET['p']:'1';
                        $div=3;
                        $pages=ceil(count($Image->all())/$div);
                        $start=($now-1)*$div;
                        $image=$Image->all([]," limit $start,$div");
                        foreach($image as $i){
                    ?>
                <tr style='text-align:center'>
                    <td><img src="img/<?=$i['img']?>" style='width:100px;height:68px'></td>
                    <td><input type="checkbox" name="sh[]" id="sh" value='<?=$i['id']?>'
                            <?=($i['sh']==1)?'checked':'';?>></td>
                    <td><input type="checkbox" name="del[]" id="del" value='<?=$i['id']?>'></td>
                    <td><input type="button" value="更新圖片"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload_<?=$do?>.php?table=<?=$do?>&id=<?=$i['id']?>&#39;)">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$i['id']?>">
                </tr>
                <?php 
                } 
                ?>
                <input type="hidden" name="table" value='<?=$do?>'>
            </tbody>
        </table>
        <div style='text-align:center'>
                <?php
                    if($now-1>0){
                        echo "<a href='?do=$do&p=".($now-1)."'><</a>";
                    }
                    for($i=1;$i<=$pages;$i++){
                        $font=($i==$now)?'30px':'20px';
                        echo "<a style='font-size:$font' href='?do=$do&p=$i'>$i</a>";
                    }
                    if($now+1 <= $pages){
                        echo "<a href='?do=$do&p=".($now+1)."'>></a>";
                    }
                ?>
        </div>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/<?=$do?>.php?table=<?=$do?>&#39;)"
                            value="新增網站標題圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>