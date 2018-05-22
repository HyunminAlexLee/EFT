<?php

class App
{
    protected $controller;
    protected $action;
    protected $params = array();
    protected $className;
    protected $route = array();
    protected $output;

    function __construct()
    {
        $this->route = $this->parseUrl();
        $this->controller = 'home';
        $this->action = 'index';
        $this->route();
    }//construct

    private function route()
    {
        if(isset($this->route['0']) && $this->route['0'] != 'index.php') {
            $this->controller = $this->route['0'];
            unset($this->route['0']);

            $data['topnav'] = Load::getContents('common/topnav');

       
        }

        $tmp_path = '../app/controller/'.$this->controller.'.php';

        Load::Controller($this->controller);

        $this->controller = Helper::setClassName($this->controller).'Controller';
        $this->controller = new $this->controller;

        if(isset($this->route['1'])) {
            $this->action = $this->route['1'];
            unset($this->route['1']);
        }

        $this->params = $this->route ? array_values($this->route) : array();

        call_user_func_array(array($this->controller, $this->action), $this->params);
    }

    private  function parseUrl()
    {
        if(isset($_GET['url'])) {
            return $url = explode('/', filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        }
    }

    public static  function render($templates=array(), $data=array())
    {
        Load::View('common/head', $data);

        if(is_array($templates)){
            foreach($templates as $template) {
                Load::View($template, $data);
            }
        } else {
            Load::View($templates, $data);
        }
       Load::View('common/footer', $data);
    }
    
    public static  function renderSubPage($templates=array(), $data=array())
    {
    	Load::View('common/subHead', $data);
    
    	if(is_array($templates)){
    		foreach($templates as $template) {
    			Load::View($template, $data);
    		}
    	} else {
    		Load::View($templates, $data);
    	}
    	Load::View('common/footer', $data);
    }
}

