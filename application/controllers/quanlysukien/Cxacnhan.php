<?php
class Cxacnhan extends MY_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mxacnhan");
    }


	public function index(){
		// xu ly ajax
		if($action = $this->input->post("action")){
			if($action == "xacnhan"){
				$data = $this->input->post("data");
				$row = $this->Mxacnhan->xacnhan($data);
				if($row > 0)
					echo "Xác nhận";
				else
					echo "Err";
			}
			return;
		}


		if($masukien = $this->input->get("masukien")){

			$data['dscanbo'] = $this->Mxacnhan->getDSCB($masukien);
			$data['url']	 = base_url();
			$data['session'] = $this->session->userdata('user');
			//'dssukien'	=> $this->Mdanhsachsukien->getDSSuKien(),
			$temp['template']  	= 'quanlysukien/Vxacnhan';
			$temp['data']  		= $data;


			$this->load->view('layout/content', $temp);
		}else{
			//redirect("404_override");
		}	
		
		
	}
}