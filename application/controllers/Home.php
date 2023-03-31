<?php

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_Model');

    }
    public function index()
    {
        $id = $this->input->post('data_id');
        $data['AreaProduct'] = $this->Home_Model->getAllArea();
        $data['DateProduct'] = $this->Home_Model->getAllDate();
        $data['AllData'] = $this->Home_Model->getAllData();
        $data['AreaSelected'] = $this->Home_Model->getAreaSelected($id);
        // $data['AreaSelected'] = $this->Home_Model->getAreaSelected($id);
        $data['judul'] = 'Halaman Home';
        $this->load->view('templates/header',$data);
        $this->load->view('Home/index');
        $this->load->view('templates/footer');
    }

    public function getSelect()
    {
        // $where = array('Id' => $id);
        
        // $this->load->view('templates/header',$data);
        // $this->load->view('Home/index',$data);
        // $this->load->view('templates/footer');
        $id = $this->input->get('Id');
        $data2['AreaSelected'] = $this->Home_Model->getAreaSelected($id);
        $this->load->view('Home/index',$data2);
    }
}

?>