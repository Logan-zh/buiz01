<h1 class='cent'>編輯次選單</h1>
<hr>
<form action="api/submenu.php" method='post' enctype="multipart/form-data">
    <table style='margin:auto' id='tb'>
        <tr>
            <td>次選單名稱：</td>
            <td>次選單連結網址：</td>
            <td>刪除</td>
        </tr>
        <?php   include_once '../base.php';
            $rows=$Menu->all(['parent'=>$_GET['id']]);
            foreach($rows as $row){
        ?>
        <tr>
            <td><input type="text" name='name[]' value='<?=$row['name']?>'></td>
            <td><input type="text" name='href[]' value='<?=$row['href']?>'></td>
            <td><input type="checkbox" name='del[]'></td>
            <input type="hidden" name="id[]" value='<?=$row['id']?>'>
        </tr>
        <?php }?>
        <tr>
            <input type="hidden" name="parent" value='<?=$_GET['id']?>'>
            <input type="hidden" name="table" value="<?=$_GET['table']?>">
            <td><input type="submit" value="修改確定"><input type="reset" value="重置"><button type='button' onclick='more()'>更多次選單</button></td>
            <td></td>
        </tr>
    </table>
</form>

<script>
    function more(){
        $('#tb').append(`
            <tr>
            <td><input type="text" name='name2[]' value=''></td>
            <td><input type="text" name='href2[]' value=''></td>
            </tr>
        `)
    }
</script>