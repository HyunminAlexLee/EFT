<?php

Class Load
{
    static function Controller($controller)
    {
        $path = '../app/controller/' . $controller . '.php';
        if (file_exists($path)) {
            require_once $path;
        }
    }

    static function Model($model)
    {
        $path = '../app/model/' . $model . '.php';
        if (file_exists($path)) {
            require_once $path;
        }
        if (strpos($model, '/') !== false) {
            $temp = explode('/', $model);
            $className = $temp['1'] . 'Model';
            return new $className;
        } else {
            $className = $model . 'Model';
            return new $className;
        }

    }

    static function View($view, $data = '')
    {
        $file = '../app/view/' . $view . '.php';
        if (file_exists($file)) {
            if ($data) {
                extract($data);
                require_once($file);
            } else {
                require_once($file);
            }
        } else {
            trigger_error('Error: Could not load template ' . $file . '!');
            exit();
        }
    }

    static function getContents($file, $data = array())
    {
        $file_path = '../app/view/' . $file . '.php';
        extract($data);
        ob_start();
        require($file_path);
        $output = ob_get_contents();
        ob_end_clean();
        return $output;
    }
}

?>
