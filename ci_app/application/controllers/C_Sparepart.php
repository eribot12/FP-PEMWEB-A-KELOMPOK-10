<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Sparepart extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_service','trans_servis');
        $this->load->model('transaksi_part','trans_part');
        $this->load->model('transaksi','trans');
        $this->load->model('karyawan','krywn');
        $this->load->model('servis');
        $this->load->model('sparepart','sparepart');
    }

    public function getDataSparepart($id){
        $data = $this->sparepart->getDataByid($id);
        echo json_encode((int)$data['harga_jual']);
    }

    public function view_sparepart(){
        
        $data['sparepart'] = $this->sparepart->getAllData();
        $this->template->render('sparepart/vsparepart', $data);
    }

	public function input_sparepart()
	{
		$this->template->render('sparepart/isparepart');
	}
    
    public function view_edit_sparepart(){
        $id = $this->uri->segment(3);
        $data['sparepart'] = $this->sparepart->getDataById($id);
        $this->template->render('sparepart/esparepart', $data);
    }
    
    public function submit_edit(){

        $id = $this->uri->segment(3);

        $data = [
            "jenis_part"=> $this->input->post('jenis_part'),
            "nama_part"=> $this->input->post('nama_part'),
            "harga_beli"=> $this->input->post('harga_beli'),
            "harga_jual"=> $this->input->post('harga_jual'),
            "stok"=> $this->input->post('stok'),
        ];

        $this->sparepart->updateData($data, $id);
        redirect('sparepart/view');

    }
    
    public function submit_data(){
        $data = [
            "jenis_part"=> $this->input->post('jenis_part'),
            "nama_part"=> $this->input->post('nama_part'),
            "harga_beli"=> $this->input->post('harga_beli'),
            "harga_jual"=> $this->input->post('harga_jual'),
            "stok"=> $this->input->post('stok'),
        ];

        $this->sparepart->insertData($data);

        redirect('home');
    }

    public function delete_sparepart(){
        $id = $this->uri->segment(3);
        $this->sparepart->deleteData($id);

        redirect('sparepart/view');
    }
}