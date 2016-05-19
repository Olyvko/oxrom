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

        var_dump($aRes);
        $this->load->helper('my_new_helper');
        var_dump(my_test());
        
        $this->load->view('my_new');
    }

}
