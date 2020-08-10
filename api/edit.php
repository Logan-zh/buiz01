<?php include_once '../base.php';
    $db=new DB($_POST['table']);
    foreach($_POST['id'] as $k => $id){
        if(!empty($_POST['del'])&&in_array($id,$_POST['del'])){
            $db->del($id);
        }else{
            $data=$db->find($id);
            switch($_POST['table']){
                case 'title':
                    $data['text']=$_POST['text'][$k];
                    $data['sh']=($id==$_POST['sh'])?1:0;
                break;
                case 'ad':
                    $data['text']=$_POST['text'][$k];
                    $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
                case 'mvim':
                    $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
                case 'image':
                    $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
                case 'news':
                    $data['text']=$_POST['text'][$k];
                    $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
                case 'bottom':
                    $data['bottom']=$_POST['bottom'][$k];
                break;
                case 'total':
                    $data['total']=$_POST['total'][$k];
                break;
                case 'admin':
                    $data['acc']=$_POST['acc'][$k];
                    $data['pw']=$_POST['pw'][$k];
                break;
                case 'menu':
                    $data['name']=$_POST['name'][$k];
                    $data['href']=$_POST['href'][$k];
                    $data['sh']=(in_array($id,$_POST['sh']))?1:0;
                break;
            }
            echo $db->save($data);
        }
    }

    to("../admin.php?do=".$_POST['table']);
?>