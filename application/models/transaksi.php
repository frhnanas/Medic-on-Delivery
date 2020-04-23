<?php 
class transaksi extends CI_Model{

    public function show_all_transaksi() {
		return $this->db->get('transaksi');
	}

    public function hapus_transaksi($transaksi_id) {
		return $this->db->delete('transaksi', ['transaksi_id' => $transaksi_id]);
	}

	public function edit_transaksi($transaksi_id,$data) {
		$this->db->where('transaksi_id', $transaksi_id);
		return $this->db->update('transaksi', $data);
	}

	public function tambah_transaksi($data) {
		return $this->db->insert('transaksi', $data);
	}

}
?>