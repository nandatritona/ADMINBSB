<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_position extends CI_Controller {

    public function __construct() {
		/**
		 * untuk error, jika mau di tampilkan matikan comment nya
		 */
		// ini_set('display_errors', 'off');
		parent::__construct();
		$this->load->model('M_position');
	}

    public function index()
    {
        $data['_view'] = "tbl_position/index";
		$this->load->view("layout/main_admin", $data);
    }

}

/* End of file Tbl_position.php */
