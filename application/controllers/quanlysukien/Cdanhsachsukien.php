<?php
class Cdanhsachsukien extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mdanhsachsukien");
        $this->load->model("Mtaosukien");
    }


	public function index(){
		// xu ly ajax
		if($action = $this->input->post("action")){
			if($action == "chitietsukien"){
				$masukien = $this->input->post("masukien");
				$res =  $this->Mdanhsachsukien->getDSDonVi($masukien);
				echo json_encode($res);
			}else if($action == "xoasukien"){
				$masukien 	= $this->input->post("masukien");
				$this->Mdanhsachsukien->xoasukien($masukien);
			}
			return;
		}

		$data = array(
			'session' 	=> $this->session->userdata('user'),
			'dssukien'	=> $this->Mdanhsachsukien->getDSSuKien(),
		);
		$temp['template']  	= 'quanlysukien/Vdanhsachsukien';
		$temp['data']  		= $data;
		
		$this->load->view('layout/content', $temp);
		
	}
}