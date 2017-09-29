<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Must extends Application
{
	function __construct()

	{
		parent::__construct();
	}

	/**
	 * Homepage for our app
	 */

	public function index()

	{
		//empty
	}
    /**
     *  wehave() - subcontroller in a subfolder
     */

    public function wehave()

    {
        $this->show(5);
    }
}