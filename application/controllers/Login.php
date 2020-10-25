<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function logon()
    {
        $this->load->view('usrlgn/template/header');
        $this->load->view('usrlgn/usr/lgn');
        $this->load->view('usrlgn/template/footer');
    }
    public function regis()
    {
        $this->load->view('usrlgn/template/header');
        $this->load->view('usrlgn/usr/rgs');
        $this->load->view('usrlgn/template/footer');
    }
}
