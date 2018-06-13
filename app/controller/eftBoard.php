<?php


class EftBoardController extends Controller
{
    public $data=array();
    public $page_size = 8;
    public $page_list_size = 5;

    public function eftBoard()
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
    	 
    	$pageModel = Load::Model ( 'eftBoard' );
    	 
    	$eftBoardList = $pageModel->getboard ( $data, $this->page_size );
    
    	   	
    	$data ['eftBoardList'] = $eftBoardList;
    	$data ['boardPaging']['boardTotalRow'] = $pageModel->getboardTotalRow ();
    	$data ['boardPaging']['page_list_size'] = $this->page_list_size;
    	$data ['boardPaging']['first_no'] = $first_no;
    	$data ['boardPaging']['page_size'] = $this->page_size;
    	$data ['boardPaging']['total_page'] = $this->total_page ( $data['boardPaging']['boardTotalRow'], $this->page_size );
    	$data ['boardPaging']['current_page'] = $this->current_page ( $this->page_size, $first_no );
    	 
    	    	
    	$templates = array('page/eftBoard');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function eftBoardUpdate()
    {
    	$data=array();
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    
    
    	$templates = array (
    			'page/eftBoardUpdate'
    	);
    
    	App::renderSubPage ( $templates, $data );
    }
    
    public function eftBoardDetail($param = array())
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$model = Load::Model('eftBoard');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    	
    
    	if(!count($param) > 0){
    		$param = $data['get'];
    	}
    	
    	
    	
    	$eftBoardDetail = $model->getEftBoardDetail($param);
    	$data['eftBoardDetail'] = $eftBoardDetail;
    	
    	$eftBoardDetailComments = $model->getEftBoardDetailComments($param);
    	$data['eftBoardDetailComments'] = $eftBoardDetailComments;
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    	app::renderSubPage('page/eftBoardDetail', $data);
    }
    public function updateEftBoard()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftBoard');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['title'] != "" ){
    		$model->updateEftBoard($data);
    	}
    
    	$this->eftBoard();
    }
    public function deleteEftBoard()
    {
    	$data=array();
    	$data = $_GET;
    
    	$model = Load::Model('eftBoard');
    
    	$model->deleteEftBoard($data);
    
    	$this->eftBoard();
    }
    
    
    public function updateEftBoardComment()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftBoard');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['description'] != "" ){
    		$model->updateEftBoardComment($data);
    	}
    
    	$this->eftBoardDetail($data);
    }
    
    public function imageUploadNicEditor()
    {
    	
    

//Check if we are getting the image
if(isset($_FILES['image'])){
        //Get the image array of details
        $img = $_FILES['image'];       
        //The new path of the uploaded image, rand is just used for the sake of it
        
        
        $image_name= rand().$img["name"];
        
        
        $path = "contents/board/" . $image_name;
        $path_image = "contents/board/" . $image_name;
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
