<?php 
	class Mdonvi extends CI_Model{
		public function getListdonvi(){
			return $this->db->get('tbl_donvi')->result_array();
		}
		public function insert($data){
			$this->db->insert('tbl_donvi',$data); 
			return $this->db->affected_rows();
		}
		public function delete($ma){
			$this->db->where('iMa_donvi',$ma);
			$this->db->delete('tbl_donvi');
			return $this->db->affected_rows();
		}
		public function getdata($ma){
			$this->db->where('iMa_donvi',$ma);
			return $this->db->get('tbl_donvi')->row_array();
		}
		public function updateData($ma,$data){
			$this->db->where('iMa_donvi',$ma);
			$this->db->update('tbl_donvi',$data);
			return $this->db->affected_rows();
		} 
		public function checkfk($ma)
		{
			$this->db->where('iMa_donvi',$ma);
			return $this->db->get('tbl_donvi')->row_array();
		}
	}
?>