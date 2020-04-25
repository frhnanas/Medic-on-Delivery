<?php 
class akun extends CI_Model{
    	
    public function login($data) {
		return $this->db->get_where('akun', $data);
	}
	
	public function cek_username($username) {
		return $this->db->get_where('akun', ['username' => $username])->num_rows() > 0;
	}

	public function create_akun($data) {
		return $this->db->insert('akun', $data);
	}
	
	public function read_akun() {
		return $this->db->get('akun');
	}

	public function update_akun($akun_id,$data) {
		$this->db->where('akun_id', $akun_id);
		return $this->db->update('akun', $data);
	}

	public function delete_akun($akun_id) {
		return $this->db->delete('akun', ['akun_id' => $akun_id]);
	}

	public function read_edit_akun($akun_id) {
		return $this->db->get_where('akun', ['akun_id' => $akun_id]);
	}

}
?>