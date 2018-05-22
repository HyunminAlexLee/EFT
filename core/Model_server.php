<?php

abstract class Model{
    protected $db='';
    protected $db_config=[];

    private function setDB()
    {
        $this->db_config = array(
            'HOST'      => 'localhost',
            'DB_NAME'   => 'codeshin_poomat',
            'USERNAME'  => 'codeshin_poomat',
            'PASS'      => 'poomat_guest11'
        );
    }

    public function connectDB()
    {
        $this->setDB();
        $hosttmp = "mysql:host=".$this->db_config['HOST'].";dbname=".$this->db_config['DB_NAME'].";charset=utf8";
        try{
            $this->db = new PDO($hosttmp,$this->db_config['USERNAME'],$this->db_config['PASS']);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function disconnectDB()
    {
        $this->db = null;
    }
}
?>
