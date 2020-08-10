<?php
    date_default_timezone_set('asia/taipei');
    session_start();
    class DB{
        private $table;
        private $pdo;
        function __construct($table){
            $this->table=$table;
            $this->pdo=new PDO('mysql:host=localhost;charset=utf8;dbname=db01','root','');
        }
        function all(...$arg){
            if(!empty($arg[0])){
                foreach($arg[0] as $k => $v){
                    $tmp[]=sprintf("`%s` = '%s'",$k,$v);
                }
                $sql="select * from `$this->table` where ".implode(" && ",$tmp)." ";
            }else{
                $sql="select * from `$this->table` ";
            }
            if(!empty($arg[1])){
                $sql.=$arg[1];
            }
            return $this->pdo->query($sql)->fetchAll();
        }
        function find($arg){
            if(is_array($arg)){
                foreach($arg as $k => $v){
                    $tmp[]=sprintf("`%s` = '%s'",$k,$v);
                }
                $sql="select * from `$this->table` where ".implode(" && ",$tmp)." ";
            }else{
                $sql="select * from `$this->table` where `id` =".$arg;
            }
            return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }
        function save($arg){
            if(!empty($arg['id'])){
                foreach($arg as $k => $v){
                    if($k!='id'){
                        $tmp[]=sprintf("`%s` = '%s'",$k,$v);
                    }
                }
                $sql="update `$this->table` set ".implode(",",$tmp)." where `id`=".$arg['id'];
            }else{
                $sql="insert into `$this->table` (`".implode("`,`",array_keys($arg))."`) values('".implode("','",$arg)."')";
            }
            return $this->pdo->exec($sql);
        }
        function del($id){
            $sql="delete from `$this->table` where `id` =" .$id;
            return $this->pdo->exec($sql);
        }
        function q($sql){
            echo $sql;
            return $this->pdo->query($sql)->fetchAll();
        }
    }
    function to($url){
        header('location:'.$url);
    }
    
    $Admin=new DB('admin');
    $Title=new DB('title');
    $Ad=new DB('ad');
    $Mvim=new DB('mvim');
    $Image=new DB('image');
    $News=new DB('news');
    $Bottom=new DB('bottom');
    $Total=new DB('total');
    $Menu=new DB('menu');

    
    $title=$Title->find(['sh'=>1]);
    $bottom=$Bottom->find(1);
    $total=$Total->find(1);
    

    if(empty($_SESSION['visited'])){
        $total['total']++;
        $Total->save($total);
        $_SESSION['visited']=$total['total'];
    }
    ?>