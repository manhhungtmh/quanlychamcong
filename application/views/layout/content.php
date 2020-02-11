<?php
	$data['url'] = base_url();
	$data['message'] = getMessages();
	//$this->load->model("danhmuc/Mdats");
	// $data['thongbao'] =  $this->Mthongbao->get_thongbao();
	// if($this->input->post('action')=='_daxulyy'){
	// 	$id = $this->input->post('id');
	//     $this->Mthongbao->daxuly_thongbao($id);
	// }
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	if(!empty($this->session->get_userdata('user')['user'])){
		$data['session'] 		 = $this->session->get_userdata('user')['user'];
		$result  = checkPermission($data['session']['maquyen'], getSegment());
		if(!$result){
			$this->session->sess_destroy();
			redirect(base_url().'403_Forbidden');
		}
		$this->parser->parse('layout/header', $data);
		$this->parser->parse($template, $data);
		$this->parser->parse('layout/footer', $data);
	}else{
		redirect($data['url']);
	}
	
 ?>