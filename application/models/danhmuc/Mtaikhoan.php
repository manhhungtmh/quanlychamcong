<?php 
	class Mtaikhoan extends CI_Model{
		public function getListtaikhoan(){
			$this->db->select('tbl_taikhoan.*,tbl_quyen.*,tbl_canbo.*');
			$this->db->from('tbl_taikhoan');
			$this->db->join('tbl_quyen','tbl_taikhoan.iMa_Quyen = tbl_quyen.iMa_Quyen','inner');
			$this->db->join('tbl_canbo','tbl_taikhoan.iMa_canbo = tbl_canbo.iMa_canbo','inner');
			return $this->db->get()->result_array();
		}
		public function getListquyen(){ 
			return $this->db->get('tbl_quyen')->result_array();
		}
		public function getListcanbo(){ 
			return $this->db->get('tbl_canbo')->result_array();
		}
		public function insert($data){ 
			$this->db->insert('tbl_taikhoan',$data); 
			return $this->db->affected_rows(); 
		}
		public function delete($ma){
			$this->db->where('iMa_TK',$ma);
			$this->db->delete('tbl_taikhoan');
			return $this->db->affected_rows();
		}
		public function getdata($ma){
			$this->db->where('iMa_TK',$ma);
			return $this->db->get('tbl_taikhoan')->row_array();
		}
		public function updateData($ma,$data){
			$this->db->where('iMa_TK',$ma);
			$this->db->update('tbl_taikhoan',$data);
			return $this->db->affected_rows();
		}
		
		public function checkfk($ma)
		{
			$this->db->where('iMa_TK',$ma);
			return $this->db->get('tbl_taikhoan')->row_array();
		}
		// public function updateData2($ma,$time){
		// 	$this->db->where('ma_loaicauhoi',$ma);
		// 	$this->db->update('tbl_quyen',$time);
		// 	return $this->db->affected_rows();
		// }
	}
?>