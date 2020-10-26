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
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|min_length[16]|max_length[16]', [
            'min_length' => 'NIK Must Match',
            'max_length' => 'NIK Must Match'
        ]);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]', [
            'min_length' =>  'Password To Short'
        ]);
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|min_length[12]|max_length[13]', [
            'min_length' => 'Phone Number Too Short',
            'max_length' => 'Phone Number Too Long'
        ]);
        if ($this->form_validation->run() == false) {

            $data['title'] = 'User Registration';
            $this->load->view('usrlgn/template/header', $data);
            $this->load->view('usrlgn/usr/rgs');
            $this->load->view('usrlgn/template/footer');
        } else {
            $data = [
                'nik' => $this->input->post('nik'),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => htmlspecialchars($this->input->post('password', true)),
                'phone' => $this->input->post('phone'),
                'date_created' => time()
                
            ];

            $this->db->insert('masyarakat', $data)
        }
    }
}
