<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model {
    public function __construct() {
		/**
		 * untuk error, jika mau di tampilkan matikan comment nya
		 */
		// ini_set('display_errors', 'off');
		parent::__construct();
	}
}