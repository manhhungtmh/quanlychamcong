<?php 

	class Mdanhsachsukien extends MY_Model{
		public function getDSSuKien(){

			$this->db->order_by("sTG_KetThuc","DESC");
			$sukien = $this->db->get("tbl_sukien")->result_array();

			$data = array();
			foreach($sukien as $val){
				$this->db->where("iMa_SuKien", $val['iMa_SuKien']);
				$this->db->from('tbl_sukien_canbo');
				$so_nguoi_duoc_phep_tham_gia = $this->db->count_all_results();

				$this->db->where(array("sTrangThai" => "Tham gia", "iMa_SuKien" => $val['iMa_SuKien']));
				$this->db->from('tbl_sukien_canbo');
				$so_nguoi_tham_gia 	= $this->db->count_all_results();

				$this->db->where(array("sTrangThai" => "Không tham gia", "iMa_SuKien" => $val['iMa_SuKien']));
				$this->db->from('tbl_sukien_canbo');
				$so_nguoi_khong_tham_gia = $this->db->count_all_results();

				$temp = array(
					'iMa_SuKien'						=> $val['iMa_SuKien'],
					'sTen_Sukien' 						=> $val['sTen_Sukien'],
					'sTG_BatDau' 						=> $val['sTG_BatDau'],
					'sTG_KetThuc' 						=> $val['sTG_KetThuc'],
					'so_nguoi_duoc_phep_tham_gia'		=> $so_nguoi_duoc_phep_tham_gia,
					'so_nguoi_tham_gia'		  			=> $so_nguoi_tham_gia,
					'so_nguoi_khong_tham_gia'		  	=> $so_nguoi_khong_tham_gia,
				);
				// Xac dinh trang thai su kien
				$thoigianbatdau_convert = str_replace("/","-",$temp['sTG_BatDau']);
				$thoigianketthuc_convert = str_replace("/","-",$temp['sTG_KetThuc']);
				if(time() < strtotime($thoigianbatdau_convert)){
					$trangthai = "Sắp diễn ra";
				}else if(strtotime($thoigianbatdau_convert) <= time() && time() <= strtotime($thoigianketthuc_convert) + 3600*24){
					$trangthai = "Đang diễn ra";
				}else{
					$trangthai = "Đã kết thúc";
				}
				$temp['trangthai']	= $trangthai;
				array_push($data, $temp);
			}
			/*pr($data);*/
			return $data;
		}

		public function xoasukien($masukien){
			$this->db->where("iMa_SuKien",$masukien);
			$this->db->delete("tbl_sukien");
			return $this->db->affected_rows();
		}

		// Xu ly data khi an nut xem
		public function getDSDonvi($masukien){
			$donvi_tmp = $this->db->get("tbl_donvi")->result_array();
			foreach ($donvi_tmp as $k => $v) {
				$donvi[$v['iMa_donvi']]	= $v['sTen_donvi'];
			}

			// lay trang thai
			$this->db->select("iMa_canbo");
			$this->db->where("iMa_SuKien", $masukien);
			$temp = $this->db->get("tbl_sukien_canbo")->result_array();

			$arrMaCanBo = array();
			if(!empty($temp)){
				foreach ($temp as $key => $va) {
					array_push($arrMaCanBo, $va['iMa_canbo']);
				}
			}
			//tu mang canbo select distinct ten khoa
			$this->db->distinct();
			$this->db->select("iMa_donvi");
			if(!empty($arrMaCanBo)){
				$this->db->where_in("iMa_canbo", $arrMaCanBo);
			}
			$id_khoa = $this->db->get("tbl_canbo_chucvu")->result_array();

			$khoa = array();
			$arrkhoa = array();
			foreach ($id_khoa as $k => $v) {
				array_push($arrkhoa, $v['iMa_donvi']);
				/*array_push($khoa, $donvi[$v['iMa_donvi']]);*/
				$khoa[$v['iMa_donvi']] = $donvi[$v['iMa_donvi']];
			}
			$data_tmp = array();
			foreach ($id_khoa as $key => $value) {
				array_push($data_tmp, array("iMa_donvi" => $value['iMa_donvi'],
										"sTen_donvi"	=> $khoa[$value['iMa_donvi']],
										"songuoiduocphepthamgia" => 0,
										"choxacnhan" => 0,
										"songuoithamgia" => 0,
										"songuoikhongthamgia" =>0));
			}
			/*pr($data_tmp);*/

			foreach ($data_tmp as $k => $v) {
				$data[$v['iMa_donvi']] = $v;
			}

			//pr($data);

			//lay tong so nguoi tham gia
			$this->db->where("iMa_SuKien", $masukien);
			$this->db->join("tbl_canbo_chucvu", "tbl_sukien_canbo.iMa_canbo = tbl_canbo_chucvu.iMa_canbo");
			$res = $this->db->get('tbl_sukien_canbo')->result_array();

			foreach ($res as $k => $v) {
				$data[$v['iMa_donvi']]['songuoiduocphepthamgia']++;
				if($v['sTrangThai'] == "Chờ xác nhận"){
					$data[$v['iMa_donvi']]['choxacnhan']++;
				}else if($v['sTrangThai'] == "Tham gia"){
					$data[$v['iMa_donvi']]['songuoithamgia']++;
				}else {
					$data[$v['iMa_donvi']]['songuoikhongthamgia']++;
				}
			}

			//pr($data);
			// convert lai mang array thong thuong
			$result = array();
			foreach ($data as $k => $v) {
				array_push($result,$v);
			}
			return $result;
		}
	}
?>