<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
        $this->middle = 'layout/frontend/home';
        $this->layout();
	}

	public function login()
    {
        $this->load->view('layout/frontend/login');
    }
}
