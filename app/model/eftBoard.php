<?php
Class EftBoardModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }


    public function getboard($data,$page_size)
    {
    
  	$first_no = $data['first_no'];
    	$query = "  SELECT en.board_id, en.title, en.div, en.description , en.create_user ,en.create_date  
    				FROM eft_board en WHERE en.status = 1 ORDER BY board_id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getboardTotalRow()
    {
    
    	$query = "
    				 SELECT  count(*) cnt
    				FROM  eft_board  WHERE status = 1;
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    public function getEftBoardDetail($data)
    {
    
    
    	$query = "
    				SELECT en.board_id, en.title, en.div, en.description , en.create_user ,en.create_date
    				FROM eft_board en WHERE board_id = :board_id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'board_id' => $data['board_id']
    	);
    
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    
    public function getEftBoardDetailComments($data)
    {
    
   
    	$query = "
    				SELECT en.board_id,  en.level, en.description , en.create_user ,en.create_date
    				FROM eft_board_comments en WHERE en.board_id = :board_id AND  en.status=1 ORDER BY en.board_comment_id desc";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'board_id' => $data['board_id']
    	);
    
    	   	
    	$stmt->execute($input);
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    public function updateEftBoard($data)
    {
    
    	$query = "INSERT INTO eft_board (`title`, `div`, `description`,  `create_user`, `create_date`) ".
    			"VALUES (:title, :div, :description, :create_user, :create_date)";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'title' => $data['title'],
    			'description' => $data['description'],
    			'div' => $data['div'],
    			'create_user' => $data['create_user'],    	
    			'create_date' =>  $data['create_date']
    	);
    	$stmt->execute($input);
    }
    public function deleteEftBoard($data)
    {
    
    	$query = "UPDATE eft_board SET status = 0 WHERE board_id = :board_id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'board_id' => $data['board_id']
    	);
    	$stmt->execute($input);
    }
    public function updateEftBoardComment($data)
    {
    
    	//echo Helper::getArrayData($data);
    	
    	$query = "INSERT INTO eft_board_comments ( `board_id`,`level`, `description`,  `create_user`, `create_date`) ".
    			"VALUES ( :board_id,:level,  :description, :create_user, NOW())";
    	$stmt = $this->db->prepare($query);
    	$input = array(    			
    			'board_id' => $data['board_id'],
    			'level' => 1,
    			'description' => $data['description'],    		
    			'create_user' => 'guest'
    	);
    	$stmt->execute($input);
    }
}

?>
