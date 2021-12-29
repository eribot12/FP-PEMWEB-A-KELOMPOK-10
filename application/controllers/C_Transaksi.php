<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Transaksi extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_service','trans_servis');
        $this->load->model('transaksi_part','trans_part');
        $this->load->model('transaksi','trans');
        $this->load->model('customer','cstmr');
        $this->load->model('karyawan','krywn');
        $this->load->model('servis');
        $this->load->model('sparepart');
        $this->load->model('transaksi');
        $this->load->model('supplier');
    }

    public function view_transaksi(){
        
        $data['transaksi'] = $this->transaksi->getAllData();
        $data['trans_part'] = $this->trans_part->getAllData();
        $data['trans_servis'] = $this->trans_servis->getAllData();
        $this->template->render('transaksi/vhistory', $data);
    }

	public function input_transaksi_servis()
	{
        $data['customer'] = $this->cstmr->getAllData();
        $data['karyawan'] = $this->krywn->getAllData();
        $data['sparepart'] = $this->sparepart->getAllData();
        $data['servis'] = $this->servis->getAllData();
		$this->template->render('transaksi/itrans_servis',$data);
	}
    
    public function input_transaksi_sparepart()
    {
        $data['customer'] = $this->cstmr->getAllData();
        $data['sparepart'] = $this->sparepart->getAllData();
        $this->template->render('transaksi/itrans_part', $data);
    }

    public function supply_part()
    {
        $data['supplier'] = $this->supplier->getAllData();
        $data['sparepart'] = $this->sparepart->getAllData();
        $this->template->render('transaksi/isupply_part', $data);
    }

    public function supply_part_submit()
    {
        $data = [
            "id_supplier"=> $this->input->post('id_sup'),
            "kode_part"=> $this->input->post('kode_part'),
            "tgl_datang"=> $this->input->post('tgl'),
            "jumlah_part"=> $this->input->post('jumlah'),
        ];

        $this->trans_part->insertData($data);
        redirect('home');
    }

    public function view_edit_customer(){
        $id = $this->uri->segment(3);
        $data['customer'] = $this->cstmr->getDataById($id);
        $this->template->render('transaksi/itrans_part', $data);
    }


    public function submit_edit(){

        $id = $this->uri->segment(3);

        $data = [
            "id_trans_part"=> $this->input->post('id_trans_part'),
            "id_supplier"=> $this->input->post('id_supplier'),
            "kode_part"=> $this->input->post('kode_part'),
            "tgl_datang"=> $this->input->post('tgl_datang'),
            "jumlah_part"=> $this->input->post('jumlah_part'),
        ];

        $this->transaksi->updateData($data, $id);
        redirect('transaksi/view');

    }
    
    public function submit_data_servis(){
        $data = [
            "id_servis"=> $this->input->post('jenis'),
            "id_karyawan"=> $this->input->post('kar'),
            "id_cust"=> $this->input->post('cust'),
            "kode_part"=> $this->input->post('kode_part'),
            "tgl_servis"=> $this->input->post('tgl'),
            "bayar_total"=> $this->input->post('total'),
        ];

        $this->trans_servis->insertData($data);
        redirect('home');
    }

    public function cetak_part(){
        $id = $this->uri->segment(3);
        $data['trans_part'] = $this->trans->getDataById($id);
        $data['customer'] = $this->cstmr->getAllData();
        $data['sparepart'] = $this->sparepart->getAllData();
        $this->load->view('transaksi/cetak_part',$data);
    }

    public function cetak_servis(){
        $id = $this->uri->segment(3);
        $data['trans_servis'] = $this->trans_servis->getDataById($id);
        $data['karyawan'] = $this->krywn->getAllData();
        $data['customer'] = $this->cstmr->getAllData();
        $data['sparepart'] = $this->sparepart->getAllData();
        $data['servis'] = $this->servis->getAllData();
        $this->load->view('transaksi/cetak_servis',$data);
        // echo json_encode($data['trans_servis']);
    }

    public function delete_transaksi(){
        $id = $this->uri->segment(3);
        $this->transaksi->deleteData($id);

        redirect('transaksi/view');
    }
}
