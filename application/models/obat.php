<?php 
class obat extends CI_Model{

    public function show_all_obat() {
		return $this->db->get('obat');
	}

    public function hapus_obat($obat_id) {
		return $this->db->delete('obat', ['obat_id' => $obat_id]);
	}

	public function edit_obat($obat_id,$data) {
		$this->db->where('obat_id', $obat_id);
		return $this->db->update('obat', $data);
	}

	public function tambah_obat($data) {
		return $this->db->insert('obat', $data);
	}

}
?>