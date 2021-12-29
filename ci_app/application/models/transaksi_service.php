<?php 

class transaksi_service extends CI_Model {

    public function getAllData(){
        return $this->db->get('trans_servis')->result_array();
    }

    public function insertData(array $data){
        return $this->db->insert('trans_servis', $data);
    }

    public function getDataById($id){
        return $this->db->get_where('trans_servis',array("id_trans_servis" => $id))->row_array();
    }



}



?>