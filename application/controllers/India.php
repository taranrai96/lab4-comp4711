<?php


class India extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // References an image in data folder
        $source = '../data/Yogurt.jpg';

        // set the mime type for that image (jpeg, png, etc)
        header("Content-type: image/jpg");
        header('Content-Disposition: inline');
        readfile($source); // dish it
    }
}