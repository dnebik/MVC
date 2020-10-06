<?php
class View
{
    public $controller_name;
    public $title = 'MVC';

    public function __construct($controller_name)
    {
        $this->controller_name = $controller_name;
    }

    public function render($content, $template_view, $data = null)
    {
        if (is_array($data))
        {
            extract($data);
        }

        include 'app/views/' . $controller_name . '/' . $template_view;
    }
}