<?php
	class Home extends CI_Controller{

		public function __construct(){

			parent::__construct();
			$this->load->library("session");
		}

		public function index(){

			$this->load->view('header_v');
			$this->load->view('home_v');
			$this->load->view('footer_v');

		}

	}

?>