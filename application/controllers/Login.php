<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function logon()
    {
        $this->load->view('usrlgn/template/header');
        $this->load->view('usrlgn/usr/lgn');
        $this->load->view('usrlgn/template/footer');
    }
    public function regis()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'User Registration';
            $this->load->view('usrlgn/template/header', $data);
            $this->load->view('usrlgn/usr/rgs');
            $this->load->view('usrlgn/template/footer');
        } else {
        }
    }
}
