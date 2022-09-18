<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_in extends CI_Controller {

    public function __construct() {
		/**
		 * untuk error, jika mau di tampilkan matikan comment nya
		 */
		// ini_set('display_errors', 'off');
		parent::__construct();
	}

    public function index()
    {
        $this->load->view("system_manajement/SignIn");
    }

}

/* End of file Sign_in.php */
