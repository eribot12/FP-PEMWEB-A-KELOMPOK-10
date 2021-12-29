<?php 

class transaksi extends CI_Model {

    public function getAllData(){
        return $this->db->get('transaksi')->result_array();
    }
    public function getDataById($id){
        return $this->db->get_where('transaksi',array("id_trans" => $id))->row_array();
    }



}



?>