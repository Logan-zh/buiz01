<?php include_once '../base.php';
    if(!empty($_POST['id'])){
        foreach($_POST['id'] as $k =>$id){
            if(!empty($_POST['del']) && in_array($id,$_POST['id'])){
                $Menu->del($id);
            }else{
                $data=$Menu->find($id);
                $data['name']=$_POST['name'];
                $data['href']=$_POST['href'];
                echo $db->save($data);
            }
        }
    }

    if(!empty($_POST['name2'])){
        foreach($_POST['name2'] as $k=>$v){
            $data2=['name'=>$v ,'href'=>$_POST['href2'][$k],'parent'=>$_POST['parent']];
            $Menu->save($data2);
        }
    }
    to("../admin.php?do=".$_POST['table']);
?>