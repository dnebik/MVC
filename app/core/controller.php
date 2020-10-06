<?php
class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View(strtolower(get_class($this)));
    }

    function action_index()
    {
        
    }
}