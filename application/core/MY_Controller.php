<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller
{
    //set the class variable.
    var $template  = array();
    var $data      = array();
    //Load layout
    public function layout() {
        // making temlate and send data to view.
        $this->template['header']   = $this->load->view('layout/frontend/header', $this->data, true);
        $this->template['nav']   = $this->load->view('layout/frontend/nav', $this->data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
        $this->template['sidebar']   = $this->load->view('layout/frontend/sidebar', $this->data, true);
        $this->template['footer'] = $this->load->view('layout/frontend/footer', $this->data, true);
        $this->load->view('layout/index', $this->template);
    }
}