<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Servis extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_service','trans_servis');
        $this->load->model('transaksi_part','trans_part');
        $this->load->model('transaksi','trans');
        $this->load->model('karyawan','krywn');
        $this->load->model('servis');
        $this->load->model('sparepart');
    }

    public function getDataServis($id){
        $data = $this->servis->getDataById($id);
        echo json_encode((int)$data['biaya_servis']);
    }

    public function view_servis(){
        
        $data['servis'] = $this->servis->getAllData();
        $this->template->render('servis/vservis', $data);
    }

	public function input_servis()
	{
		$this->template->render('servis/iservis');
	}
    
    public function view_edit_servis(){
        $id = $this->uri->segment(3);
        $data['servis'] = $this->servis->getDataById($id);
        $this->template->render('servis/eservis', $data);
    }
    
    public function submit_edit(){

        $id = $this->uri->segment(3);

        $data = [
            "jenis_servis"=> $this->input->post('jenis_servis'),
            "biaya_servis"=> $this->input->post('biaya_servis'),
        ];

        $this->servis->updateData($data, $id);
        redirect('servis/view'); 

    }
    
    public function submit_data(){
        $data = [
            "id_servis"=> $this->input->post('id_servis'),
            "jenis_servis"=> $this->input->post('jenis_servis'),
            "biaya_servis"=> $this->input->post('biaya_servis'),
        ];

        $this->servis->insertData($data);

        redirect('home');
    }

    public function delete_servis(){
        $id = $this->uri->segment(3);
        $this->servis->deleteData($id);

        redirect('servis/view');
    }
}