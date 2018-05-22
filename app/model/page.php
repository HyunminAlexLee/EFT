<?php
Class PageModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }

   public function getNotices($data)
    {
   	    	
    	$offset = ($data['page'] - 1) * $data['totalPageList'] ;
    
    	$query = "
    				SELECT 
    					worker_id
						,email
						,full_name
						,phone
						,password
						,city
						,status
						,default_address_id
						,available_yn
						,signature_yn
    					,DATE_FORMAT(prefer_date1,'%Y / %m / %d') as prefer_date1
    					,prefer_time1
    				FROM workers   
    				LIMIT  ".$offset.",".$data['totalPageList'];
    	
    	$stmt =$this->db->prepare($query);    	
    	  
       
    	$stmt->execute();	    
        
    	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);      
    	
    	return $result;
    }
    public function getNoticeTotalCnt()
    {
    	
    	$query = "
    				SELECT
    					count(*) as cnt
    				FROM workers
    
    			";
    	 
    	$stmt =$this->db->prepare($query);
    	 
    	
    	//$input['status'] = $data['status'];
    	$stmt->execute();
    
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $result;
    }
    
    
}

?>
