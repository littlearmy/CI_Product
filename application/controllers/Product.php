<?php

class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_Model');

    }

    public function index($id)
    {
        $data['judul'] = 'Daftar Product';
        $data['AreaProduct'] = $this->Home_Model->getAllArea();
        $data['AllData'] = $this->Home_Model->getAllData();
        $data['AreaSelected'] = $this->Home_Model->getAreaSelected($id);
        var_dump($data['AreaSelected']);
        $this->load->view('templates/header',$data);
        $this->load->view('Home/index');
        $this->load->view('templates/footer');
    }


}

?>