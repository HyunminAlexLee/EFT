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
