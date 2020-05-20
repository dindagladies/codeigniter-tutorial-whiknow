<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_index extends CI_Model {
    // index
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
