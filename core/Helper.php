<?php
Class Helper
{
    static function phpDate($date){
      $phpdate = strtotime($date);
      $result = date("y/M/d g:i A", $phpdate);
      return $result;
    }
    static function setClassName($file_name)
    {
        if(strpos($file_name,'-')){
            $class_name = str_replace(" ","",ucwords(str_replace("-"," ",$file_name)));
        } else {
            $class_name = ucfirst($file_name);
        }
        return $class_name;
    }//setClassName

    static function pre_var($var=array())
    {
        echo '<pre>', print_r($var), '</pre>';
    }

    static function getCurrentPage()
    {
        $var = explode('/',filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));
        return $var[0];
    }

    static function getLogo($size)
    {
        $img_path = "/img/logo-".$size.".png";
        $html_output = '<img src="'.$img_path.'" style="display:inline-block;">';
        return $html_output;
    }

    static function checkAuth()
    {
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == TRUE){
            return TRUE;
        } else {
            return FALSE;
        }
    }
    static function checkWorker()
    {
      if(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == TRUE){
          if($_SESSION['user_group_id'] == 3){
              return TRUE;
          } else {
              return FALSE;
          }
      } else {
          return FALSE;
      }
    }
    static function checkAdmin()
    {
        if(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == TRUE){
            if($_SESSION['user_group_id'] == 2){
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
    static function getPost()
    {
        return $_POST;
    }

    static function setHeader($setting)
    {
      if(!headers_sent()){
        return header($setting);
      }
    }

    static function definedClass()
    {
        Helper::pre_var(get_declared_classes());
    }

    static function definedVar()
    {
        Helper::pre_var(get_defined_vars());
    }

    static function definedMethod()
    {
        $_defined['classes'] = get_declared_classes();

        foreach($_defined['classes'] as $className){
            $_defined['method'][$className] = get_class_methods($className);
        }
        Helper::pre_var($_defined['method']);
    }

    static function getArrayData($data)
    {
    	echo "================================Array Data Start!!!===========================================<br/>";
    
    	foreach ($data as $key => $value) {
    		if(is_array($value)){
    			foreach ($value as $key_data => $value_data) {
    				if(is_array($value_data)){
    					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3.". $key." : Array Data again!!!<br>";
    
    				}else{
    					echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.". $key_data." : ". $value_data ."<br>";
    				}
    			}
    		}else{
    			echo "1.". $key." : ". $value ."<br>";
    
    		}
    	}
    	echo "================================Array Data End!!!===========================================<br/>";
    
    }
    
}
