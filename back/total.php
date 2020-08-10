<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">進佔總人數管理</p>
    <form method="post" action="api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">進佔總人數</td>
                    <td><input type="number" name='total[]' value="<?=$total['total']?>"></td>
                    <input type="hidden" name="id[]" value="<?=$total['id']?>">
                </tr>
                <input type="hidden" name="table" value='<?=$do?>'>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>