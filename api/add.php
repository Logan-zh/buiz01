<?php include_once '../base.php';
    $db=new DB($_POST['table']);
    if(!empty($_FILES['img']['tmp_name'])){
        $data['img']=$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"../img/".$_FILES['img']['name']);
    }
    switch($_POST['table']){
        case 'title':
            $data['text']=$_POST['text'];
        break;
        case 'ad':
            $data['text']=$_POST['text'];
        break;
        case 'news':
            $data['text']=$_POST['text'];
        break;
        case 'bottom':
            $data['bottom']=$_POST['bottom'];
        break;
        case 'total':
            $data['total']=$_POST['total'];
        break;
        case 'admin':
            $data['acc']=$_POST['acc'];
            $data['pw']=$_POST['pw'];
        break;
        case 'menu':
            $data['name']=$_POST['name'];
            $data['href']=$_POST['href'];
        break;
    }
    echo $db->save($data);
    to("../admin.php?do=".$_POST['table']);
?>