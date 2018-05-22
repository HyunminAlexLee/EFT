<?php


class EftController extends Controller
{
    
    
    public function eft()
    {
        $data = array();              
      
        $data['menu'] = Load::getContents('common/eftLeftMenu');
        
        $templates = array('page/eft');   
        
        App::renderSubPage($templates, $data);
    }
    
    public function about_eft()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    
    	$templates = array('page/aboutEft');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function eft_video()
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
    	
    	$pageModel = Load::Model ( 'eftVideo' );
    	
    	$data ['gallery']['gallery'] = $pageModel->getgallery ( $data, $this->gallery_page_size );
    	
    	$data ['gallery']['galleryTotalRow'] = $pageModel->getgalleryTotalRow ();
    	$data ['gallery']['page_list_size'] = $this->gallery_page_list_size;
    	$data ['gallery']['first_no'] = $first_no;
    	$data ['gallery']['page_size'] = $this->gallery_page_size;
    	$data ['gallery']['total_page'] = $this->total_page ( $data['gallery']['galleryTotalRow'], $this->gallery_page_size );
    	$data ['gallery']['current_page'] = $this->current_page ( $this->gallery_page_size, $first_no );
    	
    	echo "==================".$data ['gallery']['galleryTotalRow'];
    	
    	$templates = array('page/eftVideo');
    
    	App::renderSubPage($templates, $data);
    }
    
    
   
    public function eft_news()
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
    	 
    	$data ['gallery']['gallery'] = $pageModel->getgallery ( $data, $this->gallery_page_size );
    	 
    	$data ['gallery']['galleryTotalRow'] = $pageModel->getgalleryTotalRow ();
    	$data ['gallery']['page_list_size'] = $this->gallery_page_list_size;
    	$data ['gallery']['first_no'] = $first_no;
    	$data ['gallery']['page_size'] = $this->gallery_page_size;
    	$data ['gallery']['total_page'] = $this->total_page ( $data['gallery']['galleryTotalRow'], $this->gallery_page_size );
    	$data ['gallery']['current_page'] = $this->current_page ( $this->gallery_page_size, $first_no );
    	 
    	    	
    	$templates = array('page/eftNews');
    
    	App::renderSubPage($templates, $data);
    }
    

    public function eft_how()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    
    	$templates = array('page/eftHow');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function eft_qna()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    
    	$templates = array('page/eftQna');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function eft_board()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    
    	$templates = array('page/eftBoard');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function eft_memo()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/eftLeftMenu');
    
    	$templates = array('page/eftMemo');
    
    	App::renderSubPage($templates, $data);
    }
    
    
}

?>
