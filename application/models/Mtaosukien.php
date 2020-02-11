<?php 

	class Mtaosukien extends MY_Model{

		public function taosukien($data){
			$this->db->insert("tbl_sukien", $data);
			return $this->db->affected_rows();
		}

		// sua su kien ajax
		public function getsukien($masukien){
			$this->db->where("iMa_SuKien", $masukien);
			$res = $this->db->get("tbl_sukien")->row_array();
			return $res;
		}	

		public function getcanbo($masukien){
			$this->db->select("iMa_canbo");
			$this->db->where("iMa_sukien", $masukien);
			$temp = $this->db->get("tbl_sukien_canbo")->result_array();
			$where = array();
			foreach ($temp as $k => $v) {
				array_push($where, $v['iMa_canbo']);
			}
			
			// sau khi co mang ma canbo thuoc su kien
			// lay thong tin
			$this->db->select("iMa_canbo, sTen_Canbo, sNgaySinh, sGioiTinh");
			$res = $this->get_where_in("tbl_canbo","iMa_canbo",$where); 
			return $res;
		}

		public function thongtinsukien($masukien){
			//$res['donvi']	= $this->db->get("tbl_donvi")->result_array();

			$this->db->select("sTen_Sukien, sTG_BatDau, sTG_KetThuc");
			$this->db->where("iMa_SuKien",$masukien);
			$res['thongtin'] = $this->db->get("tbl_sukien")->row_array();


			// mang can bo tham gia su kien
			$this->db->select("iMa_canbo");
			$this->db->where("iMa_SuKien",$masukien);
			$temp = $this->db->get("tbl_sukien_canbo")->result_array();

			$arrMaCanBo = array();
			if(!empty($temp)){
				foreach ($temp as $key => $val) {
					array_push($arrMaCanBo, $val['iMa_canbo']);
				}
			}

			// ton tai mang can bo tham gia thi moi truy van db
			if(!empty($arrMaCanBo)){
				$this->db->select("iMa_canbo, sTen_Canbo, sGioiTinh, sNgaySinh");
				$this->db->where_in("iMa_canbo", $arrMaCanBo);
				$res['dscanbo'] = $this->db->get("tbl_canbo")->result_array();
			}
			
			return $res;
		}

	}
?>