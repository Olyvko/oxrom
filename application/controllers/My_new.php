<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_new extends CI_Controller {

    /**
     * function for test
     */
    public function my_func()
    {
        $this->load->model('my_new_model');
        $aRes = $this->my_new_model->getInfo();

        //redirect('../');
       // redirect($this->config->item('base_url').'/my_new');
        var_dump($aRes);
        var_dump($this->config->item('base_url'));
        $this->load->helper('my_new_helper');
        var_dump(my_test());
        
        $this->load->view('my_new');
    }

    public function index()
    {
        $this->load->view('welcome_message');
    }

}
