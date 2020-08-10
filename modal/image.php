<h1 class='cent'>新增校園映像圖片</h1>
<hr>
<form action="api/add.php" method='post' enctype="multipart/form-data">
<table style='margin:auto'>
    <tr>
        <td>校園映像圖片：</td>
        <td><input type="file" name='img'></td>
    </tr>

    <tr>
        <input type="hidden" name="table" value="<?=$_GET['table']?>">
        <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
        <td></td>
    </tr>
</table>
</form>