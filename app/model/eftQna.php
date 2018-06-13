<?php
Class EftQnaModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }


    public function getqna($data,$page_size)
    {
    
  	$first_no = $data['first_no'];
    	$query = "  SELECT en.qna_id, en.title, en.div, en.description , en.create_user ,en.create_date  
    				FROM eft_qna en WHERE en.status = 1 ORDER BY qna_id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	
    	
    	
    	return $result;
    }
    public function getqnaTotalRow()
    {
    
    	$query = "
    				 SELECT  count(*) cnt
    				FROM  eft_qna  WHERE status = 1;
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    public function getEftQnaDetail($data)
    {
    
    
    	$query = "
    				SELECT en.qna_id, en.title, en.div, en.description , en.create_user ,en.create_date
    				FROM eft_qna en WHERE qna_id = :qna_id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'qna_id' => $data['qna_id']
    	);
    
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    
    public function getEftQnaDetailComments($data)
    {
    
   
    	$query = "
    				SELECT en.qna_id,  en.level, en.description , en.create_user ,en.create_date
    				FROM eft_qna_comments en WHERE en.qna_id = :qna_id AND  en.status=1 ORDER BY en.qna_comment_id desc";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'qna_id' => $data['qna_id']
    	);
    
    	   	
    	$stmt->execute($input);
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    public function updateEftQna($data)
    {
    
    	$query = "INSERT INTO eft_qna (`title`, `div`, `description`,  `create_user`, `create_date`) ".
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
    public function deleteEftQna($data)
    {
    
    	$query = "UPDATE eft_qna SET status = 0 WHERE qna_id = :qna_id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'qna_id' => $data['qna_id']
    	);
    	$stmt->execute($input);
    }
    public function updateEftQnaComment($data)
    {
    
    	//echo Helper::getArrayData($data);
    	
    	$query = "INSERT INTO eft_qna_comments ( `qna_id`,`level`, `description`,  `create_user`, `create_date`) ".
    			"VALUES ( :qna_id,:level,  :description, :create_user, NOW())";
    	$stmt = $this->db->prepare($query);
    	$input = array(    			
    			'qna_id' => $data['qna_id'],
    			'level' => 1,
    			'description' => $data['description'],    		
    			'create_user' => 'guest'
    	);
    	$stmt->execute($input);
    }
}

?>
