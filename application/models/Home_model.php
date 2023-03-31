<?php
    class Home_model extends CI_Model{
        public function getAllArea()
        {
            return $this->db->get('store_area')->result_array();

        }
        public function getAllBrand()
        {
            return $this->db->get('product_brand')->result_array();

        }
        public function getAllDate()
        {
            return $this->db->get('report_product')->result_array();

        }

        public function getAreaSelected($Id)
        {
            return $this->db->get_where('store_area',['area_id' => $Id])->result_array();
        }

        public function getAllData()
        {
            $this->db->select('*');
            $this->db->from('report_product as rp');
            $this->db->join('store as str', 'rp.store_id = str.store_id');
            $this->db->join('store_account as sac', 'str.account_id = sac.account_id');
            $this->db->join('store_area as sar', 'str.area_id = sar.area_id');
            $this->db->join('product as pr', 'rp.product_id = pr.product_id');
            $this->db->join('product_brand as br', 'pr.brand_id = br.brand_id');
            $query = $this->db->get();
            $results = $query->result_array();

            return $results;
        }
    }
?>