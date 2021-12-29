<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Customer extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_service','trans_servis');
        $this->load->model('transaksi_part','trans_part');
        $this->load->model('transaksi','trans');
        $this->load->model('customer','cstmr');
        $this->load->model('karyawan','krywn');
        $this->load->model('servis');
        $this->load->model('sparepart');
        $this->load->model('sparepart');
    }

    public function view_customer(){
        
        $data['customer'] = $this->cstmr->getAllData();
        $this->template->render('Customer/vcustomer', $data);
    }

	public function input_customer()
	{
		$this->template->render('Customer/icustomer');
	}
    
    public function view_edit_customer(){
        $id = $this->uri->segment(3);
        $data['customer'] = $this->cstmr->getDataById($id);
        $this->template->render('Customer/ecustomer', $data);
    }
    
    public function submit_edit(){

        $id = $this->uri->segment(3);

        $data = [
            "nama_cust"=> $this->input->post('nama_cust'),
            "jk_cust"=> $this->input->post('jk_cust'),
            "alamat_cust"=> $this->input->post('alamat'),
        ];

        $this->cstmr->updateData($data, $id);
        redirect('customer/view');

    }
    
    public function submit_data(){
        $data = [
            "nama_cust"=> $this->input->post('nama_cust'),
            "jk_cust"=> $this->input->post('jk_cust'),
            "alamat_cust"=> $this->input->post('alamat'),
        ];

        $this->cstmr->insertData($data);

        redirect('home');
    }

    public function delete_customer(){
        $id = $this->uri->segment(3);
        $this->cstmr->deleteData($id);

        redirect('customer/view');
    }
}
