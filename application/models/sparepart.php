<?php 

class sparepart extends CI_Model {

    public function getAllData(){
        return $this->db->get('sparepart')->result_array();
    }

    public function getDataById($id){
        return $this->db->get_where('sparepart', array("kode_part"=> $id))->row_array();
    }

    public function insertData(array $data){
        return $this->db->insert('sparepart', $data);
    }

    public function updateData(array $data, $id){
        return $this->db->update('sparepart', $data, array("kode_part"=> $id));
    }

    public function deleteData($id){
        return $this->db->delete('sparepart', array("kode_part"=> $id));
    }
}
?>