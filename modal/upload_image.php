<h1 class='cent'>更新校園映像資料圖片</h1>
<hr>
<form action="api/upload.php" method='post' enctype='multipart/form-data'>
<table style='margin:auto'>
    <tr>
        <td>校園映像資料圖片：</td>
        <td><input type="file" name='img'></td>
    </tr>
    <tr>
        <input type="hidden" name="table" value="<?=$_GET['table']?>">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <td><input type="submit" value="更新"><input type="reset" value="重置"></td>
        <td></td>
    </tr>
</table>
</form>