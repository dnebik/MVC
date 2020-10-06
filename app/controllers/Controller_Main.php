<?php
class Controller_Main extends Controller
{
    public function action_index()
    {
        $this->view->render('index');
    }
}