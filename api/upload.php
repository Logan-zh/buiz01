<?php include_once '../base.php';
    $db=new DB($_POST['table']);
    $data=$db->find($_POST['id']);
    if(!empty($_FILES['img']['tmp_name'])){
        $data['img']=$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    }

    echo $db->save($data);
    to("../admin.php?do=".$_POST['table']);
?>