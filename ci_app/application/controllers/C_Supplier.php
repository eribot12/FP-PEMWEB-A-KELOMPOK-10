<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Supplier extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_service','trans_servis');
        $this->load->model('transaksi_part','trans_part');
        $this->load->model('transaksi','trans');
        $this->load->model('customer','cstmr');
        $this->load->model('supplier','supplier');
        $this->load->model('karyawan','krywn');
        $this->load->model('servis');
        $this->load->model('sparepart');
        $this->load->model('sparepart');
    }

    public function view_supplier(){
        
        $data['supplier'] = $this->supplier->getAllData();
        $this->template->render('Supplier/vsupplier', $data);
    }

	public function input_supplier()
	{
		$this->template->render('Supplier/isupplier');
	}
    
    public function view_edit_supplier(){
        $id = $this->uri->segment(3);
        $data['supplier'] = $this->supplier->getDataById($id);
        $this->template->render('Supplier/esupplier', $data);
    }
    
    public function submit_edit(){

        $id = $this->uri->segment(3);

        $data = [
            "id_supplier"=> $this->input->post('id_supplier'),
            "nama_supplier"=> $this->input->post('nama_supplier'),
            "alamat_supplier"=> $this->input->post('alamat'),
        ];

        $this->supplier->updateData($data, $id);
        redirect('supplier/view');

    }
    
    public function submit_data(){
        $data = [
            "id_supplier"=> $this->input->post('id_supplier'),
            "nama_supplier"=> $this->input->post('nama_supplier'),
            "alamat_supplier"=> $this->input->post('alamat'),
        ];

        $this->supplier->insertData($data);

        redirect('home');
    }

    public function delete_supplier(){
        $id = $this->uri->segment(3);
        $this->supplier->deleteData($id);

        redirect('supplier/view');
    }
}
