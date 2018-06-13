<?php
Class AffirmationModel extends Model
{
    function __construct()
    {
        $this->connectDB();
    }


    public function getAffirmationToday($data)
    {
    
  		
    	$query = "  SELECT 	affirmation_id							
							,title
							,content
							,content_html
							,author
							,category
							,status  
    				FROM 	affirmations WHERE status = 1";
    	$stmt =$this->db->prepare($query);
    
    
    	$stmt->execute();
    	$result = $stmt->fetch(PDO::FETCH_ASSOC);
    	
    	return $result;
    }   
}

?>
