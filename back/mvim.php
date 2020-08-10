<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">動畫圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="10%"></td>
                </tr>
                    <?php
                        $mvim=$Mvim->all();
                        foreach($mvim as $m){
                    ?>
                <tr style='text-align:center'>
                    <td><img src="img/<?=$m['img']?>" style='width:100px;height:68px'></td>
                    <td><input type="checkbox" name="sh[]" id="sh" value='<?=$m['id']?>'
                            <?=($m['sh']==1)?'checked':'';?>></td>
                    <td><input type="checkbox" name="del[]" id="del" value='<?=$m['id']?>'></td>
                    <td><input type="button" value="更新圖片"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/upload_<?=$do?>.php?table=<?=$do?>&id=<?=$m['id']?>&#39;)">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$m['id']?>">
                </tr>
                <?php } ?>
                <input type="hidden" name="table" value='<?=$do?>'>

            </tbody>
        </table>

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