<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="40%">帳號</td>
                    <td width="40%">密碼</td>
                    <td width="10%">刪除</td>
                    <td></td>
                </tr>
                <?php
                        $admin=$Admin->all();
                        foreach($admin as $a){
                    ?>
                <tr>
                    <td><input type="text" name='acc[]' value="<?=$a['acc']?>"></td>
                    <td><input type="text" name='pw[]' value="<?=$a['pw']?>"></td>
                    <td><input type="checkbox" name="del[]" id="del" value='<?=$a['id']?>'></td>
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
                            value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>