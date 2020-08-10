<?php include_once '../base.php';
    $chk=$Admin->find(['acc'=>$_POST['acc'],'pw'=>$_POST['pw']]);
    if(!empty($chk)){
        echo 1;
    }else{
        echo 0;
    }
?>