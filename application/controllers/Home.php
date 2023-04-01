<?php

class Home extends CI_Controller {
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
        $this->load->view('templates/header',$data);
        $this->load->view('Home/index');
        $this->load->view('templates/footer');
    }
}

?>