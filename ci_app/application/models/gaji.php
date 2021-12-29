<?php 

class gaji extends CI_Model {

    public function getAllData(){
        return $this->db->get('gaji')->result_array();
    }
    public function getDataById($id){
        return $this->db->get_where('gaji', array("id_karyawan"=> $id))->row_array();
    }

    public function insertData(array $data){
        return $this->db->insert('gaji', $data);
    }

    public function updateData(array $data, $id){
        return $this->db->update('gaji', $data, array("id_karyawan"=> $id));
    }

    public function deleteData($id){
        return $this->db->delete('gaji', array("id_karyawan"=> $id));
    }



}



?>