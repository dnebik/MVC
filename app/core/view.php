<?php
class View
{
    public $controller_name;
    public $title = 'MVC';

    public function __construct($controller_name)
    {
        $this->controller_name = $controller_name;
    }

    public function render($content, $layout = 'main', $data = null)
    {
        $layout = 'app/views/layouts/' . $layout . '.php';
        $this->controller_name = 'app/views/' . $this->controller_name . '/' . $content . '.php';

        if (is_array($data))
        {
            extract($data);
        }

        include 'app/views/' . $this->controller_name . '/' . $layout;
    }
}