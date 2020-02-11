<?php 
	class Mchucvu extends CI_Model{
		public function getListchucvu(){
			return $this->db->get('tbl_chucvu')->result_array();
		}
		public function insert($data){
			$this->db->insert('tbl_chucvu',$data); 
			return $this->db->affected_rows();
		}
		public function delete($ma){
			$this->db->where('iMa_chucvu',$ma);
			$this->db->delete('tbl_chucvu');
			return $this->db->affected_rows();
		}
		public function getdata($ma){
			$this->db->where('iMa_chucvu',$ma);
			return $this->db->get('tbl_chucvu')->row_array();
		}
		public function updateData($ma,$data){
			$this->db->where('iMa_chucvu',$ma);
			$this->db->update('tbl_chucvu',$data);
			return $this->db->affected_rows();
		} 
		public function checkfk($ma)
		{
			$this->db->where('iMa_chucvu',$ma);
			return $this->db->get('tbl_chucvu')->row_array();
		}
	}
?>