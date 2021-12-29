<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Karyawan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('transaksi_service','trans_servis');
        $this->load->model('transaksi_part','trans_part');
        $this->load->model('transaksi','trans');
        $this->load->model('customer','cstmr');
        $this->load->model('karyawan','krywn');
        $this->load->model('kehadiran','absen');
        $this->load->model('servis');
        $this->load->model('gaji');
        $this->load->model('sparepart');
    }
    
    public function getDataAbsensi($id){
        $data = $this->absen->getDataById($id);
        echo json_encode(count($data));
    }

    public function view_karyawan(){
        
        $data['karyawan'] = $this->krywn->getAllData();
        $data['absen'] = $this->absen->getAllData();
        $data['gaji'] = $this->gaji->getAllData();
        
        $this->template->render('Karyawan/vkaryawan', $data);
    }

	public function input_karyawan()
	{
		$this->template->render('Karyawan/ikaryawan');
	}

    public function input_absensi(){
        $data['karyawan'] = $this->krywn->getAllData();
        $this->template->render('Karyawan/ikehadiran',$data);
    }

    public function submit_absensi(){
        $data = [
            "id_karyawan"=> $this->input->post('id'),
            "tgl_absen"=> $this->input->post('tgl'),
            "hadir"=> $this->input->post('kehadiran'),
        ];


        $this->absen->insertData($data);

        redirect('karyawan/view');
    }

    public function input_penggajian(){
        $data['karyawan'] = $this->krywn->getAllData();
        $this->template->render('Karyawan/ipenggajian',$data);
    }

    public function submit_gaji(){
        $data = [
            "id_karyawan"=> $this->input->post('id'),
            "jumlah_hadir"=> $this->input->post('hadir'),
            "gaji"=> $this->input->post('total'),
        ];


        $this->gaji->insertData($data);

        redirect('karyawan/view');
    }
    
    public function view_edit_karyawan(){
        $id = $this->uri->segment(3);
        $data['karyawan'] = $this->krywn->getDataById($id);
        $this->template->render('Karyawan/ekaryawan', $data);
    }
    
    public function submit_edit(){

        $id = $this->uri->segment(3);

        $data = [
            "nama_karyawan"=> $this->input->post('nama_kar'),
            "jabatan"=> $this->input->post('jabatan'),
        ];

        $this->krywn->updateData($data, $id);
        redirect('karyawan/view');

    }
    
    public function submit_data(){
        $data = [
            "nama_karyawan"=> $this->input->post('nama_kar'),
            "jabatan"=> $this->input->post('jabatan'),
        ];


        $this->krywn->insertData($data);

        redirect('karyawan/view');
    }

    public function delete_karyawan(){
        $id = $this->uri->segment(3);
        $this->krywn->deleteData($id);

        redirect('karyawan/view');
    }
}