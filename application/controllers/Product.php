<?php

class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_Model');

    }

    public function index()
    {
        $data['judul'] = 'Daftar Product';
        $data['AreaProduct'] = $this->Home_Model->getAllArea();
        $data['AllData'] = $this->Home_Model->getAllData();
        $this->load->view('templates/header',$data);
        $this->load->view('Product/index');
        $this->load->view('templates/footer');
    }


}

?>