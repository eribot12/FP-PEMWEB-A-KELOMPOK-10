<?php 

class karyawan extends CI_Model {

    public function getAllData(){
        return $this->db->get('karyawan')->result_array();
    }

    public function getDataById($id){
        return $this->db->get_where('karyawan', array("id_karyawan"=> $id))->row_array();
    }

    public function insertData(array $data){
        return $this->db->insert('karyawan', $data);
    }

    public function updateData(array $data, $id){
        return $this->db->update('karyawan', $data, array("id_karyawan"=> $id));
    }

    public function deleteData($id){
        return $this->db->delete('karyawan', array("id_karyawan"=> $id));
    }
 
}



?>