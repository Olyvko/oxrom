<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_new extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }

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
