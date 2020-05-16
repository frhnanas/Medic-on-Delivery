<?php 
class transaksi extends CI_Model{

    public function create_transaksi($data) {
		return $this->db->insert('transaksi', $data);
	}
    
    public function read_transaksi() {
		return $this->db->get('transaksi');
	}

    public function update_transaksi($transaksi_id,$data) {
		$this->db->where('transaksi_id', $transaksi_id);
		return $this->db->update('transaksi', $data);
	}

    public function delete_transaksi($transaksi_id) {
		return $this->db->delete('transaksi', ['transaksi_id' => $transaksi_id]);
	}

	public function delete_transaksi_akun($akun_id) {
		return $this->db->delete('transaksi', ['akun_id' => $akun_id]);
	}

	public function delete_transaksi_obat($obat_id) {
		return $this->db->delete('transaksi', ['obat_id' => $obat_id]);
	}

    public function read_riwayat($akun_id) {
		return $this->db->get_where('transaksi', ['akun_id' => $akun_id]);
	}

}
?>