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

}
?>