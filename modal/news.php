<h1 class='cent'>新增最新消息資料</h1>
<hr>
<form action="api/add.php" method='post' enctype="multipart/form-data">
<table style='margin:auto'>
    <tr>
        <td>最新消息資料：</td>
        <td><textarea name="text" style="width:100%;height:40px"></textarea></td>
    </tr>
    <tr>
        <input type="hidden" name="table" value="<?=$_GET['table']?>">
        <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
        <td></td>
    </tr>
</table>
</form>