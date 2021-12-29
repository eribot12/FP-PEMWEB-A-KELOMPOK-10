<?php 

class transaksi_part extends CI_Model {

    public function getAllData(){
        return $this->db->get('trans_part')->result_array();
    }

    public function insertData(array $data){
        return $this->db->insert('trans_part', $data);
    }

    public function getDataById($id){
        return $this->db->get_where('trans_part',array("id_trans" => $id))->row_array();
    }




}



?>