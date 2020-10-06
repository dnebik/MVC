<?php
class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View( strtolower( str_replace( 'Controller_', '', get_class($this) )) );
    }

    function action_index()
    {
        
    }
}