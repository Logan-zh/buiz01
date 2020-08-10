<h1 class='cent'>新增主選單</h1>
<hr>
<form action="api/add.php" method='post' enctype="multipart/form-data">
<table style='margin:auto'>
    <tr>
        <td>主選單名稱：</td>
        <td><input type="text" name='name'></td>
    </tr>
    <tr>
        <td>主選單連結：</td>
        <td><input type="text" name='href'></td>
    </tr>
    <tr>
        <input type="hidden" name="table" value="<?=$_GET['table']?>">
        <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
        <td></td>
    </tr>
</table>
</form>