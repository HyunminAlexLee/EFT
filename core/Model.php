<?php

abstract class Model{
    protected $db;
    protected $db_config=array();

    private function setDB()
    {
        $this->db_config = array(
            'HOST'      => 'codeshin.cfjfyxp3gluu.us-east-1.rds.amazonaws.com',
            'DB_NAME'   => 'poomat',
            'USERNAME'  => 'poomat_web',
            'PASS'      => 'poomat11'
        );
    }

    public function connectDB()
    {
        $this->setDB();
       // $hosttmp = "mysql:host=".$this->db_config(0).";dbname=".$this->db_config(1).";charset=utf8";
        $hosttmp = "mysql:host=".'localhost'.";dbname=".'w_eft_db'.";charset=utf8";
        
   
        try{
            $this->db = new PDO($hosttmp,'root','');           
            $this->db->exec("set names utf8");
            
        }
        catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function disconnectDB()
    {
        $this->db = null;
    }
}
?>
