<?php
Class EftVideosModel extends Model
{
 function __construct()
    {
        $this->connectDB();
    }


    public function getvideos($data,$page_size)
    {
    
  	$first_no = $data['first_no'];
    	$query = "  SELECT en.video_id, en.title, en.div, en.description , en.create_user ,en.create_date  
    				FROM eft_videos en WHERE en.status = 1 ORDER BY videos_id DESC LIMIT ".$first_no.",".$page_size;
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    	return $result;
    }
    public function getvideosTotalRow()
    {
    
    	$query = "
    				 SELECT  count(*) cnt
    				FROM  eft_videos  WHERE status = 1;
    
    			";
    	$stmt =$this->db->prepare($query);
    
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result['cnt'];
    }
    
    public function getEftNewsDetail($data)
    {
    
    
    	$query = "
    				SELECT en.video_id, en.title, en.div, en.description , en.create_user ,en.create_date
    				FROM eft_videos en WHERE video_id = :video_id";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'video_id' => $data['video_id']
    	);
    
    	$stmt->execute($input);
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    
    public function getEftNewsDetailComments($data)
    {
    
   
    	$query = "
    				SELECT en.video_id,  en.level, en.description , en.create_user ,en.create_date
    				FROM eft_video_comments en WHERE en.video_id = :video_id AND  en.status=1 ORDER BY en.video_comment_id desc";
    	$stmt =$this->db->prepare($query);
    	$input = array(
    			'video_id' => $data['video_id']
    	);
    
    	   	
    	$stmt->execute($input);
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    public function updateEftNews($data)
    {
    
    	$query = "INSERT INTO eft_videos (`title`, `div`, `description`,  `create_user`, `create_date`) ".
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
    public function deleteEftNews($data)
    {
    
    	$query = "UPDATE eft_videos SET status = 0 WHERE video_id = :video_id";
    	$stmt = $this->db->prepare($query);
    	$input = array(
    			'video_id' => $data['video_id']
    	);
    	$stmt->execute($input);
    }
    public function updateEftNewsComment($data)
    {
    
    	//echo Helper::getArrayData($data);
    	
    	$query = "INSERT INTO eft_video_comments ( `video_id`,`level`, `description`,  `create_user`, `create_date`) ".
    			"VALUES ( :video_id,:level,  :description, :create_user, NOW())";
    	$stmt = $this->db->prepare($query);
    	$input = array(    			
    			'video_id' => $data['video_id'],
    			'level' => 1,
    			'description' => $data['description'],    		
    			'create_user' => 'guest'
    	);
    	$stmt->execute($input);
    }
    
}

?>
