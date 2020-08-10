<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">主選單名稱</td>
                    <td width="23%">選單連結網址</td>
                    <td width="7%">次選單數</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                        $menu=$Menu->all(['parent'=>0]);
                        foreach($menu as $t){
                    ?>
                <tr>
                    <td width="45%"><input type="text" name="name[]" value='<?=$t['name']?>'></td>
                    <td width="23%"><input type="text" name='href[]' value="<?=$t['href']?>"></td>
                    <td width="7%"><?=count($Menu->all(['parent'=>$t['id']]))?></td>
                    <td width="7%"><input type="checkbox" name="sh[]" value='<?=$t['id']?>' <?=($t['sh']==1)?'checked':''?>></td>
                    <td width="7%"><input type="checkbox" name="del[]" value='<?=$t['id']?>'></td>
                    <td><input type="button" value="編輯次選單"
                            onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/edit_<?=$do?>.php?table=<?=$do?>&id=<?=$t['id']?>&#39;)">
                    </td>
                    <input type="hidden" name="id[]" value="<?=$t['id']?>">
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
                            value="新增主選單"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>