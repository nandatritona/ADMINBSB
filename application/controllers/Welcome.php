<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		/**
		 * untuk error, jika mau di tampilkan matikan comment nya
		 */
		// ini_set('display_errors', 'off');
		parent::__construct();
		$this->load->dbforge();
		if ($this->db->table_exists('tbl_superAdmin') == False) {

		} else {

		}
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function created() {
		if ($this->db->table_exists('tbl_superAdmin') == False) {
			$this->create_table_tbl_superAdmin();
			$this->create_table_tbl_position();
			$this->create_table_tbl_menu();
			$this->create_table_tbl_access();

			$this->relation_tbl_access_tbl_position();
			$this->relation_tbl_access_tbl_menu();

			redirect('','refresh');
		} else {
			$this->session->set_flashdata('error', 'Database NotFound !');
			redirect('','refresh');
		}
	}

	public function create_table_tbl_superAdmin() {
		if ($this->db->table_exists('tbl_superAdmin') == False) {
			$this->dbforge->add_field('id');
			$this->dbforge->add_field("`nib` VARCHAR(20) NOT NULL");
			$this->dbforge->add_field("`company_name` VARCHAR(100) NOT NULL");
			$this->dbforge->add_field("`owner_name` VARCHAR(100) NOT NULL");
			$this->dbforge->add_field("`phone` VARCHAR(20) NOT NULL");
			$this->dbforge->add_field("`email` VARCHAR(50) NOT NULL");
			$this->dbforge->add_field("`address` TEXT NOT NULL");
			$this->dbforge->add_field("`company_password` VARCHAR(100) NOT NULL");

			$this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
			$this->dbforge->add_field("`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

			$this->dbforge->create_table("tbl_superAdmin");
		} else {
			redirect('','refresh');
		}
	}

	public function create_table_tbl_position() {
		if ($this->db->table_exists('tbl_position') == False) {
			$this->dbforge->add_field('id');
			$this->dbforge->add_field("`position_name` VARCHAR(100) NOT NULL");

			$this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
			$this->dbforge->add_field("`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

			$this->dbforge->create_table("tbl_position");
		} else {
			redirect('','refresh');
		}
	}

	public function create_table_tbl_menu() {
		if ($this->db->table_exists('tbl_menu') == False) {
			$this->dbforge->add_field('id');
			$this->dbforge->add_field("`menu_name` VARCHAR(100) NOT NULL");
			$this->dbforge->add_field("`icons` VARCHAR(100) NOT NULL");
			$this->dbforge->add_field("`routes` VARCHAR(100) NOT NULL");

			$this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
			$this->dbforge->add_field("`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

			$this->dbforge->create_table("tbl_menu");
		} else {
			redirect('','refresh');
		}
	}

	public function create_table_tbl_access() {
		if ($this->db->table_exists('tbl_access') == False) {
			$this->dbforge->add_field('id');
			$this->dbforge->add_field("`position_id` INT NOT NULL");
			$this->dbforge->add_field("`menu_id` INT NOT NULL");

			$this->dbforge->add_field("`created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
			$this->dbforge->add_field("`updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

			$this->dbforge->create_table("tbl_access");
		} else {
			redirect('','refresh');
		}
	}

	public function relation_tbl_access_tbl_position()
	{
		return $this->db->query("ALTER TABLE tbl_access ADD FOREIGN KEY tbl_access_ibfk_1(position_id) REFERENCES tbl_position(id) ON DELETE CASCADE ON UPDATE NO ACTION");
	}

	public function relation_tbl_access_tbl_menu()
	{
		return $this->db->query("ALTER TABLE tbl_access ADD FOREIGN KEY tbl_access_ibfk_2(menu_id) REFERENCES tbl_menu(id) ON DELETE CASCADE ON UPDATE NO ACTION");
	}
}
