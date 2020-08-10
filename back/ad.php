<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="80%">動態文字廣告</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                        $ad=$Ad->all();
                        foreach($ad as $a){
                    ?>
                <tr>
                    <td width="23%"><input type="text" name='text[]' value="<?=$a['text']?>" style='width:70%'></td>
                    <td width="7%"><input type="checkbox" name="sh[]" id="sh" value='<?=$a['id']?>'
                            <?=($a['sh']==1)?'checked':'';?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" id="del" value='<?=$a['id']?>'></td>
                    <input type="hidden" name="id[]" value="<?=$a['id']?>">
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
                            value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>