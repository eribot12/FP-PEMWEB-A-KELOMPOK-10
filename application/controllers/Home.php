<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_service','trans_servis');
        $this->load->model('transaksi_part','trans_part');
        $this->load->model('transaksi','trans');
        $this->load->model('customer','cstmr');
        $this->load->model('karyawan','krywn');
        $this->load->model('servis');
        $this->load->model('sparepart');
    }

	public function index()
	{
        $data['trans_servis'] = $this->trans_servis->getAllData();
        $data['trans'] = $this->trans->getAllData();
        $data['customer'] = $this->cstmr->getAllData();
        $data['karyawan'] = $this->krywn->getAllData();
        $data['servis'] = $this->servis->getAllData();
        $data['sparepart'] = $this->sparepart->getAllData();
		$this->template->render('home/index', $data);
	}    
}
