<?php

class Home extends Controller
{
    public function index()
    {
        $data['page_title'] = "home";
        $this->view('eshopper/index',$data);
    }
}