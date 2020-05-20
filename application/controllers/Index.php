<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    // construct
    function __construct(){
        parent::__construct();
        // load model
        $this->load->model('M_index');
    }

    // show landing page
	public function index()
	{
        // load view
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('layout/index');
        $this->load->view('layout/footer');
    }
    
    // show login
    public function login(){
        // load view
        $this->load->view('layout/header');
        $this->load->view('layout/login');
        $this->load->view('layout/footer');
    }

    // show register
    public function register(){
        // load view
        $this->load->view('layout/header');
        $this->load->view('layout/register');
        $this->load->view('layout/footer');
    }

    // register process
    public function register_process(){
        // params
        $params = array(
            'name' => $this->input->post('name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'password' => $this->input->post('password', TRUE)
        )
    }

    // login process
    public function login_process(){
        // params
        $params = array(
            'email' => $this->input->post('email', TRUE),
            'password' => $this->input->post('password', TRUE)
        );
    }
}
