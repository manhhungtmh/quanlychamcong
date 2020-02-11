<?php
class Ctaosukien extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mtaosukien");
    }


	public function index(){
		// ajax
		if($action = $this->input->post("action")){
			if($action == "getCanbo"){
				$ma_donvi = $this->input->post("ma_donvi");

				$this->db->select("iMa_canbo");
				$this->db->where("iMa_donvi", $ma_donvi);
				$temp = $this->db->get("tbl_canbo_chucvu")->result_array();
				$res = array();
				for($i=0; $i<count($temp); ++$i){
					$res[$i] = $temp[$i]['iMa_canbo'];
				}
				
				$this->db->where_in("iMa_canbo", $res);
				$this->db->select("iMa_canbo,sTen_Canbo,sNgaySinh,sGioiTinh");
				$canbo = $this->db->get("tbl_canbo")->result_array();

				//pr($canbo);
				echo json_encode($canbo);
		    }else if($action == "taosukien"){
				$sukien 	= $this->input->post("sukien");
				$temp 		= $this->input->post("dsthamgia");

				$sukien['iMa_SuKien']		= time().rand(100,999);
				$sukien['iMa_Taikhoan'] 	= "1";
				/*$sukien['sTen_Sukien']		= $sukientmp['sTen_Sukien'];*/

				// insert db
				$this->Mtaosukien->insert("tbl_sukien", $sukien);
				$dsthamgia = array();
				for($i=0; $i<count($temp); ++$i){
					$dsthamgia[$i]['iMa_SuKien'] = $sukien['iMa_SuKien'];
					$dsthamgia[$i]['iMa_canbo'] = $temp[$i];
					$dsthamgia[$i]['sTrangThai'] = "Chờ xác nhận";
				}
				$this->Mtaosukien->insert_batch("tbl_sukien_canbo", $dsthamgia);
				echo $sukien['iMa_SuKien'];
			}else if($action == "suasukien"){
				// sua su kien
				$sukien 	= $this->input->post("sukien");
				$temp 		= $this->input->post("dsthamgia");
				$masukien   = $this->input->post("mask");
				// tach thoi gian de  lay thoi gian bat dau va thoi gian ket thuc su kien
				// insert db
				$this->db->where("iMa_SuKien", $masukien);
				$this->db->update("tbl_sukien", $sukien);

				$dsthamgia = array();
				for($i=0; $i<count($temp); ++$i){
					$dsthamgia[$i]['iMa_SuKien'] = $masukien;
					$dsthamgia[$i]['iMa_canbo']  = $temp[$i];
					$dsthamgia[$i]['sTrangThai'] = "Chờ xác nhận";
				}
				$this->db->where("iMa_sukien", $masukien);
				$this->db->delete("tbl_sukien_canbo");
				// Xoa het di insert lai
				$this->Mtaosukien->insert_batch("tbl_sukien_canbo", $dsthamgia);
				echo "Sửa sự kiện thành công";
			}
			return;
		}



		$data = array(
			"url"		=> base_url(),
			'session' 	=> $this->session->userdata('user'),
			"donvi" 	=> $this->Mtaosukien->get("tbl_donvi"),
		);
		if($masukien = $this->input->get("masukien")){
			$data['sukien'] = $this->Mtaosukien->thongtinsukien($masukien);
			$data['masukien'] = $masukien;
		}

		$temp['template']  	= 'quanlysukien/Vtaosukien';
		$temp['data']  		= $data;
		$this->load->view('layout/content', $temp);
	}
}