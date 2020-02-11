<?php 
	class Mcanbo extends CI_Model{
		public function getListcanbo(){
			$this->db->select('tbl_canbo.*,tbl_loaibienche.*,tbl_donvi.*,tbl_chucvu.*');
			$this->db->from('tbl_canbo');
			$this->db->join('tbl_loaibienche','tbl_canbo.iMa_loai = tbl_loaibienche.iMa_loai','inner');
			$this->db->join('tbl_donvi','tbl_canbo.iMa_donvi = tbl_donvi.iMa_donvi','inner');
			$this->db->join('tbl_chucvu','tbl_canbo.iMa_chucvu = tbl_chucvu.iMa_chucvu','inner');
			return $this->db->get()->result_array();
		}
		public function getListloaibienche(){ 
			return $this->db->get('tbl_loaibienche')->result_array();
		}
		public function getListdonvi(){ 
			return $this->db->get('tbl_donvi')->result_array();
		}
		public function getListchucvu(){ 
			return $this->db->get('tbl_chucvu')->result_array();
		}
		public function insert($data){ 
			$this->db->insert('tbl_canbo',$data); 
			return $this->db->affected_rows(); 
		}
		public function delete($ma){
			$this->db->where('iMa_canbo',$ma);
			$this->db->delete('tbl_canbo');
			return $this->db->affected_rows();
		}
		public function getdata($ma){
			$this->db->where('iMa_canbo',$ma);
			return $this->db->get('tbl_canbo')->row_array();
		}
		public function updateData($ma,$data){
			$this->db->where('iMa_canbo',$ma);
			$this->db->update('tbl_canbo',$data);
			return $this->db->affected_rows();
		}
		
		public function checkfk($ma)
		{
			$this->db->where('iMa_canbo',$ma);
			return $this->db->get('tbl_canbo')->row_array();
		}
		// public function updateData2($ma,$time){
		// 	$this->db->where('ma_loaicauhoi',$ma);
		// 	$this->db->update('tbl_loaibienche',$time);
		// 	return $this->db->affected_rows();
		// }
	}
?>