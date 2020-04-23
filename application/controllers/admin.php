<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('akun');
        $this->load->model('obat');
        $this->load->model('transaksi');
	}
	
	public function index()
	{
		$this->load->view('home');
	}
    
    public function check_account(){
        $data['data'] = $this->akun->show_all_akun()->result();
        $this->load->view('check_account', $data);
    }

    public function check_medicine(){
        $data['data'] = $this->obat->show_all_obat()->result();
        $this->load->view('check_medicine', $data);
    }

    public function check_transaction(){
        $data['data'] = $this->transaksi->show_all_transaksi()->result();
        $this->load->view('check_transaction', $data);
    }

    public function hapusakun($user_id) {
		$this->akun->hapus_akun($user_id);
		redirect('admin/check_account');
	}

	public function hapusobat($obat_id) {
		$this->obat->hapus_obat($obat_id);
		redirect('admin/check_medicine');
	}


	public function tambahobat() {
		$input_data = [
            'obat_id' => $this->input->post('obat_id', true),
			'nama_obat' => $this->input->post('nama_obat', true),
			'jenis' => $this->input->post('jenis', true),
			'harga' => $this->input->post('harga', true),
			'status_obat' => $this->input->post('status_obat', true),
        ];
        
		$this->obat->tambah_obat($input_data);
		redirect('admin/check_medicine');
	}

	public function editobat() {
		$data = [
            'obat_id' => $this->input->post('obat_id', true),
            'nama_obat' => $this->input->post('nama_obat', true),
			'jenis' => $this->input->post('jenis', true),
			'harga' => $this->input->post('harga', true),
			'status_obat' => $this->input->post('status_obat', true),
		];

		$obat_id = $this->input->post('obat_id', true);
		$this->obat->edit_obat($obat_id, $data);
		redirect('admin/check_medicine');
    }
    
    public function hapustransaksi($transaksi_id) {
		$this->transaksi->hapus_transaksi($transaksi_id);
		redirect('admin/check_transaction');
    }
    
    public function edittransaksi() {
		$data = [
            'transaksi_id' => $this->input->post('transaksi_id', true),
            'nama_pemesan' => $this->input->post('nama_pemesan', true),
			'pesanan' => $this->input->post('pesanan', true),
			'total_harga' => $this->input->post('total_harga', true),
			'status_transaksi' => $this->input->post('status_transaksi', true),
		];

		$transaksi_id = $this->input->post('transaksi_id', true);
		$this->transaksi->edit_transaksi($transaksi_id, $data);
		redirect('admin/check_transaction');
    }

}
?>