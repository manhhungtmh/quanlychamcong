<?php 

	class Mxacnhan extends MY_Model{

		public function getDSCB($masukien){
			$session = $this->session->userdata("user");
			// lay ma don vi
			$canbo = $this->get_where_row("tbl_canbo_chucvu", "iMa_canbo", $session['macb']);
			$madonvi = $canbo['iMa_donvi'];
			// lay tat ca canbo thuoc su kien
			$this->db->select("sTrangThai, tbl_canbo.iMa_canbo, tbl_canbo.sTen_Canbo, tbl_canbo.sNgaySinh, tbl_canbo.sGioiTinh");
			$this->db->where("iMa_sukien", $masukien);
			$this->db->where("tbl_canbo_chucvu.iMa_donvi", $madonvi);
			$this->db->join("tbl_canbo", "tbl_canbo.iMa_canbo = tbl_sukien_canbo.iMa_canbo");
			$this->db->join("tbl_canbo_chucvu", "tbl_canbo.iMa_canbo = tbl_canbo_chucvu.iMa_canbo");
			$res = $this->db->get("tbl_sukien_canbo")->result_array();

			return $res;
		}

		public function xacnhan($arr){
			$this->db->update_batch('tbl_sukien_canbo', $arr, 'iMa_canbo');
			return $this->db->affected_rows();
		}
	}
?>