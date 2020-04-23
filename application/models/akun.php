<?php 
class akun extends CI_Model{

	public function check_akun($username, $password) {
		return $this->db->get_where('akun', ['username' => $username, 'password' => $password]);
	}
    
    public function check_username($username) {
		return $this->db->get_where('akun', ['username' => $username])->num_rows() > 0;
	}

    public function login($data) {
		return $this->db->get_where('akun', $data);
	}

	public function show_all_akun() {
		return $this->db->get('akun');
	}

	public function hapus_akun($user_id) {
		return $this->db->delete('akun', ['user_id' => $user_id]);
	}

	public function edit_akun($user_id,$data) {
		$this->db->where('user_id', $user_id);
		return $this->db->update('akun', $data);
	}

	public function tambah_akun($data) {
		return $this->db->insert('akun', $data);
	}

}
?>