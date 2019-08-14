<?php
defined('BASEPATH') OR exit('Tidak mempunyai hak akses script');

class Frontend_Controller extends MY_Controller{

    function __construct()
    {
        parent:: __construct();
        $this->load->library(array());
        $this->load->helper(array());
        $this->load->model(array('User_model'));
        
        $this->site->side       = "frontend";
        $this->site->template   = "default";
    }

}