<?php


class EftNewsController extends Controller
{
    public $data=array();
    public $page_size = 3;
    public $page_list_size = 5;

    public function eftNews()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    
    	

    	$first_no = 0;
    	if (isset ( $data ['first_no'] )) {
    		$first_no = $data ['first_no'];
    	}
    	 
    	if (! $first_no || $first_no < 0) {
    		$first_no = 0;
    		$data ['first_no'] = 0;
    	}
    	 
    	$pageModel = Load::Model ( 'eftNews' );
    	 
    	$eftNewsList = $pageModel->getnews ( $data, $this->page_size );
    
    	   	
    	$data ['eftNewsList'] = $eftNewsList;
    	$data ['newsPaging']['newsTotalRow'] = $pageModel->getnewsTotalRow ();
    	$data ['newsPaging']['page_list_size'] = $this->page_list_size;
    	$data ['newsPaging']['first_no'] = $first_no;
    	$data ['newsPaging']['page_size'] = $this->page_size;
    	$data ['newsPaging']['total_page'] = $this->total_page ( $data['newsPaging']['newsTotalRow'], $this->page_size );
    	$data ['newsPaging']['current_page'] = $this->current_page ( $this->page_size, $first_no );
    	 
    	    	
    	$templates = array('page/eftNews');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function eftNewsUpdate()
    {
    	$data=array();
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    
    
    	$templates = array (
    			'page/eftNewsUpdate'
    	);
    
    	App::renderSubPage ( $templates, $data );
    }
    
    public function eftNewsDetail($param = array())
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$model = Load::Model('eftNews');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    	
    
    	if(!count($param) > 0){
    		$param = $data['get'];
    	}
    	
    	
    	
    	$eftNewsDetail = $model->getEftNewsDetail($param);
    	$data['eftNewsDetail'] = $eftNewsDetail;
    	
    	$eftNewsDetailComments = $model->getEftNewsDetailComments($param);
    	$data['eftNewsDetailComments'] = $eftNewsDetailComments;
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    	app::renderSubPage('page/eftNewsDetail', $data);
    }
    public function updateEftNews()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftNews');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['title'] != "" ){
    		$model->updateEftNews($data);
    	}
    
    	$this->eftNews();
    }
    public function deleteEftNews()
    {
    	$data=array();
    	$data = $_GET;
    
    	$model = Load::Model('eftNews');
    
    	$model->deleteEftNews($data);
    
    	$this->eftNews();
    }
    
    
    public function updateEftNewsComment()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftNews');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['description'] != "" ){
    		$model->updateEftNewsComment($data);
    	}
    
    	$this->eftNewsDetail($data);
    }
    
    public function imageUploadNicEditor()
    {
    	
    

//Check if we are getting the image
if(isset($_FILES['image'])){
        //Get the image array of details
        $img = $_FILES['image'];       
        //The new path of the uploaded image, rand is just used for the sake of it
        
        
        $image_name= rand().$img["name"];
        
        
        $path = "contents/news/" . $image_name;
        $path_image = "contents/news/" . $image_name;
        //Move the file to our new path
        move_uploaded_file($img['tmp_name'],$path);
        //Get image info, reuiqred to biuld the JSON object
        $data = getimagesize($path);
        //The direct link to the uploaded image, this might varyu depending on your script location   

       
        $link = "http://$_SERVER[HTTP_HOST]"."/".$path_image;
        //Here we are constructing the JSON Object
        $res = array("upload" => array(
                                "links" => array("original" => $link),
                                "image" => array("width" => $data[0],
                                                 "height" => $data[1]
                                 )                              
        ));
        //echo out the response :)
        echo json_encode($res);
    }
    }
   
}

?>
