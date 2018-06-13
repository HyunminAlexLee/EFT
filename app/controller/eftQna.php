<?php


class EftQnaController extends Controller
{
    public $data=array();
    public $page_size = 8;
    public $page_list_size = 5;

    public function eftQna()
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
    	 
    	$pageModel = Load::Model ( 'eftQna' );
    	 
    	$eftQnaList = $pageModel->getqna ( $data, $this->page_size );
    
    	   	
    	$data ['eftQnaList'] = $eftQnaList;
    	$data ['qnaPaging']['qnaTotalRow'] = $pageModel->getqnaTotalRow ();
    	$data ['qnaPaging']['page_list_size'] = $this->page_list_size;
    	$data ['qnaPaging']['first_no'] = $first_no;
    	$data ['qnaPaging']['page_size'] = $this->page_size;
    	$data ['qnaPaging']['total_page'] = $this->total_page ( $data['qnaPaging']['qnaTotalRow'], $this->page_size );
    	$data ['qnaPaging']['current_page'] = $this->current_page ( $this->page_size, $first_no );
    	 
    	    	
    	$templates = array('page/eftQna');
    
    	
    	
    	App::renderSubPage($templates, $data);
    }
    
    public function eftQnaUpdate()
    {
    	$data=array();
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    
    
    	$templates = array (
    			'page/eftQnaUpdate'
    	);
    
    	App::renderSubPage ( $templates, $data );
    }
    
    public function eftQnaDetail($param = array())
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$model = Load::Model('eftQna');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    	
    
    	if(!count($param) > 0){
    		$param = $data['get'];
    	}
    	
    	
    	
    	$eftQnaDetail = $model->getEftQnaDetail($param);
    	$data['eftQnaDetail'] = $eftQnaDetail;
    	
    	$eftQnaDetailComments = $model->getEftQnaDetailComments($param);
    	$data['eftQnaDetailComments'] = $eftQnaDetailComments;
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    	app::renderSubPage('page/eftQnaDetail', $data);
    }
    public function updateEftQna()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftQna');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['title'] != "" ){
    		$model->updateEftQna($data);
    	}
    
    	$this->eftQna();
    }
    public function deleteEftQna()
    {
    	$data=array();
    	$data = $_GET;
    
    	$model = Load::Model('eftQna');
    
    	$model->deleteEftQna($data);
    
    	$this->eftQna();
    }
    
    
    public function updateEftQnaComment()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftQna');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['description'] != "" ){
    		$model->updateEftQnaComment($data);
    	}
    
    	$this->eftQnaDetail($data);
    }
    
    public function imageUploadNicEditor()
    {
    	
    

//Check if we are getting the image
if(isset($_FILES['image'])){
        //Get the image array of details
        $img = $_FILES['image'];       
        //The new path of the uploaded image, rand is just used for the sake of it
        
        
        $image_name= rand().$img["name"];
        
        
        $path = "contents/qna/" . $image_name;
        $path_image = "contents/qna/" . $image_name;
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
