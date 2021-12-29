<?php 

class servis extends CI_Model {

    public function getAllData(){
        return $this->db->get('servis')->result_array();
    }

    public function getDataById($id){
        return $this->db->get_where('servis', array("id_servis"=> $id))->row_array();
    }

    public function insertData(array $data){
        return $this->db->insert('servis', $data);
    }

    public function updateData(array $data, $id){
        return $this->db->update('servis', $data, array("id_servis"=> $id));
    }

    public function deleteData($id){
        return $this->db->delete('servis', array("id_servis"=> $id));
    }
}
?>