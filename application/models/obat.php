<?php 
class obat extends CI_Model{

    public function create_obat($data) {
		return $this->db->insert('obat', $data);
	}
    
    public function read_obat() {
		return $this->db->get('obat');
	}

    public function update_obat($obat_id,$data) {
		$this->db->where('obat_id', $obat_id);
		return $this->db->update('obat', $data);
	}

    public function delete_obat($obat_id) {
		return $this->db->delete('obat', ['obat_id' => $obat_id]);
	}

    public function cek_obat($nama_obat) {
		return $this->db->get_where('obat', ['nama_obat' => $nama_obat])->num_rows() > 0;
	}

	public function read_beli() {
		return $this->db->get('obat');
	}

}
?>