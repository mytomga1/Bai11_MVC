<?php
class BannerController{

    // property

    // method
    public  function create(){
        include_once 'views/banner/create.php';
    }

    public function edit()
    {
        include_once 'views/banner/edit.php';
    }

    public function index()
    {
        include_once 'views/banner/index.php';
    }
}