<?php 

class customer extends CI_Model {

    public function getAllData(){
        return $this->db->get('customer')->result_array();
    }

    public function getDataById($id){
        return $this->db->get_where('customer', array("id_cust"=> $id))->row_array();
    }

    public function insertData(array $data){
        return $this->db->insert('customer', $data);
    }

    public function updateData(array $data, $id){
        return $this->db->update('customer', $data, array("id_cust"=> $id));
    }

    public function deleteData($id){
        return $this->db->delete('customer', array("id_cust"=> $id));
    }



}



?>