<?php
class MYSQLPDO{
        //数据库默认连接信息
        private $dbConfig=array(
            'db' => 'mysql',   //数据库类型
            'host' => 'localhost', //服务器地址
            'port' => '3306',  //端口
            'user' => 'root',  //用户名
            'pass' => '',   //密码
            'charset'=> 'utf8', //字符集
            'dbname' => '',  //默认数据库
           );
        private static $instance; //单列模式 本类对象引用
        private $db;              //保存pdo 实列
        private $data=array();   //操作数据
        
        private function __construct($params){
            $this->dbConfig=array_merge($this->dbConfig,$params);
            $this->connect(); //连接服务器
        }
    public  static function getInstance($params=array()){
        if (!self::$instance instanceof  self){
            self::$instance=new self($params);
        }
        return self::$instance; //返回对象
    }
   //私有克隆
   private  function __clone(){}
   //连接目标服务器
   private function connect(){
       //连接信息
       $dsn="{$this->dbConfig['db']}:host={$this->dbConfig['host']};
       port={$this->dbConfig['port']};dbname={$this->dbConfig['dbname']};
       charset={$this->dbConfig['charset']}";
   
       try{
           //实列化PDO
           $this->db =new  PDO($dsn,$this->dbConfig['user'],$this->dbConfig['pass']);
       }catch (PDOException $e){
           die("数据库连接失败");//连接失败
       }
   }
   //通过预处理方式执行SQL（$batch 表示是否批量处理）
   public function query($sql,$batch=false){
    //取出成员属性中的数据并清空
    $data=$batch ? $this->data:array($this->data);
    $this->data=array();
    //通过预处理方式执行sql
     $stmt = $this->db-> prepare($sql);
     foreach ($data as $v){
         if ($stmt->execute($v)===false){
             die("数据库操作失败");
         }
     }
    return $stmt;
   
   }
    //保存操作数据如果使用sql模板则通过次方式传递数据
    public function data($data){
        $this->data=$data;
        return $this;//返回对象自身用于连贯操作
    }
    //取得一行结果
    public function fetchRow($sql){
        return $this->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    //取得所有结果
    public  function fetchAll($sql){
        return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    }

?>