<?php
class Route
{
    public static function start()
    {
        $controller_name = 'Main';
        $action_name = 'index';

        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if ( !empty($routes[1]) )
        {
            $controller_name = $routes[1];
        }

        if ( !empty($routes[2]) )
        {
            $action_name = $routes[2];
        }

        $models = self::getAllFiles('app/models/');
        if($models)
        foreach ($models as $model)
        {
            include $model;
        }
        
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'action_' . $action_name;

        $controller_file = $controller_name . '.php';
        $controller_path = 'app/controllers/' . $controller_file;

        if ( file_exists($controller_path) )
        {
            include $controller_path;
        }
        else
        {
            Route::ErrorPage404();
        }

        if (!class_exists($controller_name))
        {
            return;
        }

        $controller = new $controller_name;
        $action = $action_name;

        if ( method_exists($controller, $action) )
        {
            $controller->$action();
        }
        else
        {
            Route::ErrorPage404();
        }
    }

    public static function ErrorPage404()
    {
        $host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location: ' . $host . '404');
    }

    private static function getAllFiles($dir)
    {
        $arr = array();
        if ($handle = opendir($dir)) {

            while (false !== ($entry = readdir($handle))) {
        
                if ($entry != "." && $entry != "..") {
                    if (is_file($dir . '/' . $entry))
                    {
                        if (preg_match('/.+\.php/', $entry))
                        {
                            array_push($arr, $dir . '/' . $entry);
                        }
                    }
                    if (is_dir($dir. '/' .$entry))
                    {
                        self::getAllFiles($dir . '/' . $entry);
                    }
                }
            }
        
            closedir($handle);
        }
        return $arr;
    }
}