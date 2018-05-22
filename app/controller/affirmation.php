<?php


class AffirmationController extends Controller
{
    public $data=array();

    public function affirmation()
    {
        $data = array();     
        
        $data['menu'] = Load::getContents('common/affirmationLeftMenu');
         
        $templates = array('page/affirmation');
        App::renderSubPage($templates, $data);
    }
  
    public function about_affirmation()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/aboutAffirmation');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function affirmation_video()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/affirmationVideo');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function affirmation_news()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/affirmationNews');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function affirmation_how()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/affirmationHow');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function affirmation_qna()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/affirmationQna');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function affirmation_board()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/affirmationBoard');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function affirmation_memo()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/affirmationMemo');
    
    	App::renderSubPage($templates, $data);
    }
    
    public function affirmation_today()
    {
    	$data = array();
    
    	$data['menu'] = Load::getContents('common/affirmationLeftMenu');
    
    	$templates = array('page/affirmationToday');
    
    	App::renderSubPage($templates, $data);
    }
}

?>
