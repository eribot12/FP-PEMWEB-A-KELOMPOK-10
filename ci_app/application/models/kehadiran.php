<?php 

class kehadiran extends CI_Model {

    public function getAllData(){
        return $this->db->get('kehadiran')->result_array();
    }

    public function getDataById($id){
        $this->db->where("id_karyawan",$id);
        $this->db->where("hadir","hadir");
        return $this->db->get('kehadiran')->result_array();
    }

    public function insertData(array $data){
        return $this->db->insert('kehadiran', $data);
    }

    public function updateData(array $data, $id){
        return $this->db->update('kehadiran', $data, array("id_kehadiran"=> $id));
    }

    public function deleteData($id){
        return $this->db->delete('kehadiran', array("id_kehadiran"=> $id));
    }



}



?>