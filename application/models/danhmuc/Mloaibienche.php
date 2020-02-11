<?php 
	class Mloaibienche extends CI_Model{
		public function getListloaibienche(){
			return $this->db->get('tbl_loaibienche')->result_array();
		}
		public function insert($data){
			$this->db->insert('tbl_loaibienche',$data); 
			return $this->db->affected_rows();
		}
		public function delete($ma){
			$this->db->where('iMa_loai',$ma);
			$this->db->delete('tbl_loaibienche');
			return $this->db->affected_rows();
		}
		public function getdata($ma){
			$this->db->where('iMa_loai',$ma);
			return $this->db->get('tbl_loaibienche')->row_array();
		}
		public function updateData($ma,$data){
			$this->db->where('iMa_loai',$ma);
			$this->db->update('tbl_loaibienche',$data);
			return $this->db->affected_rows();
		} 
		public function checkfk($ma)
		{
			$this->db->where('iMa_loai',$ma);
			return $this->db->get('tbl_canbo')->row_array();
		}
	}
?>