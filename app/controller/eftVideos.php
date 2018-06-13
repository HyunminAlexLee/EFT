<?php


class EftVideosController extends Controller
{
    public $data=array();
    public $page_size = 8;
    public $page_list_size = 5;

    public function eftVideos()
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
    	 
    	$pageModel = Load::Model ( 'eftVideos' );
    	 
    	$eftVideosList = $pageModel->getvideos ( $data, $this->page_size );
    
    	   	
    	$data ['eftVideosList'] = $eftVideosList;
    	$data ['videosPaging']['videosTotalRow'] = $pageModel->getvideosTotalRow ();
    	$data ['videosPaging']['page_list_size'] = $this->page_list_size;
    	$data ['videosPaging']['first_no'] = $first_no;
    	$data ['videosPaging']['page_size'] = $this->page_size;
    	$data ['videosPaging']['total_page'] = $this->total_page ( $data['videosPaging']['videosTotalRow'], $this->page_size );
    	$data ['videosPaging']['current_page'] = $this->current_page ( $this->page_size, $first_no );
    	 
    	    	
    	$templates = array('page/eftVideos');
    
    	App::renderSubPage($templates, $data);
    }
    
 /*   public function eftVideosUpdate()
    {
    	$data=array();
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    
    
    	$templates = array (
    			'page/eftVideosUpdate'
    	);
    
    	App::renderSubPage ( $templates, $data );
    }
   */ 
    public function eftVideosDetail($param = array())
    {
    	$data=array();
    	$data['get'] = $_GET;
    	//$data = Helper::getPost();
    	$model = Load::Model('eftVideos');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    	
    
    	if(!count($param) > 0){
    		$param = $data['get'];
    	}
    	
    	
    	
    	$eftVideosDetail = $model->getEftVideosDetail($param);
    	$data['eftVideosDetail'] = $eftVideosDetail;
    	
    	$eftVideosDetailComments = $model->getEftVideosDetailComments($param);
    	$data['eftVideosDetailComments'] = $eftVideosDetailComments;
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    	
    	app::renderSubPage('page/eftVideosDetail', $data);
    }
 /*   public function updateEftVideos()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftVideos');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['title'] != "" ){
    		$model->updateEftVideos($data);
    	}
    
    	$this->eftVideos();
    }
    public function deleteEftVideos()
    {
    	$data=array();
    	$data = $_GET;
    
    	$model = Load::Model('eftVideos');
    
    	$model->deleteEftVideos($data);
    
    	$this->eftVideos();
    }
    
    */
    public function updateEftVideosComment()
    {
    	$data=array();
    	$data = $_POST;
    
    	$model = Load::Model('eftVideos');
    	//	$data['get']['status'] = '2';
    
    	//helper::getArrayData($data['get']);
    
    	if($data['description'] != "" ){
    		$model->updateEftVideosComment($data);
    	}
    
    	$this->eftVideosDetail($data);
    }       
}

?>
