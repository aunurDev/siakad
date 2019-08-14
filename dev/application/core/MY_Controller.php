<?php
defined('BASEPATH') OR exit('Tidak mempunyai hak akses script');

class MY_Controller extends CI_Controller{

    public $data = array();

    function __construct()
    {
        parent:: __construct();
        $this->load->library(array('Site'));
        $this->load->helper(array());
        $this->load->model(array());
    }

}