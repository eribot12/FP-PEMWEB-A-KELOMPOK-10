<?php 

class supplier extends CI_Model {

    public function getAllData(){
        return $this->db->get('supplier')->result_array();
    }

    public function getDataById($id){
        return $this->db->get_where('supplier', array("id_supplier"=> $id))->row_array();
    }

    public function insertData(array $data){
        return $this->db->insert('supplier', $data);
    }

    public function updateData(array $data, $id){
        return $this->db->update('supplier', $data, array("id_supplier"=> $id));
    }

    public function deleteData($id){
        return $this->db->delete('supplier', array("id_supplier"=> $id));
    }



}



?>