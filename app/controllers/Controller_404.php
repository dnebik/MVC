<?php
class Controller_404 extends Controller
{
    public function action_index()
    {
        $this->view->render('index');
    }
}