<?php
class Controller_Main extends Controller
{
    public function action_index()
    {
        error_log("попал в MAIN index");
        $this->view->render('index');
    }
}