<?php
defined('BASEPATH') OR exit('Tidak mempunyai hak akses script');

class Frontend_Controller extends CI_Controller{

    function __construct()
    {
        parent:: __construct();
        echo '<h1>ini adalah frontend</h1>';
        $this->load->model(array('User_model'));
    }

}