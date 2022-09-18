<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_position extends CI_Model {

    public function __construct() {
		/**
		 * untuk error, jika mau di tampilkan matikan comment nya
		 */
		// ini_set('display_errors', 'off');
		parent::__construct();
	}

    public function getAllPosition()
    {
        return $this->db->get('tbl_position');
    }

}

/* End of file M_position.php */
