<?php

use PhpParser\Node\Stmt\TryCatch;

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_Model');
    }
    public function index()
    {

        $data['AreaProduct'] = $this->Home_Model->getAllArea();
        $data['AllBrand'] = $this->Home_Model->getAllBrand();
        $data['DateProduct'] = $this->Home_Model->getAllDate();
        $data['AllData'] = $this->Home_Model->getAllData();
        $data['judul'] = 'Halaman Home';
        $data['user'] = $this->db->get_where('employee', ['id_employee' =>
        $this->session->userdata('id_employee')])->row_array();
        if (!$data['user']) {
            return redirect('auth');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('Home/index', $data);
        $this->load->view('templates/footer', $data);
    }
}
