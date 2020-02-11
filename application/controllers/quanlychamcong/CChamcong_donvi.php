<?php 
	/**
	 * summary
	 */
	class CChamcong_donvi extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('quanlychamcong/MChamcongdonvi');
	    }
	    public function index(){
	    	// arr change thu thanh tieng viet
	    	$data['tengibaygio'] = array(
	    		"Monday" 	=> "Thứ hai",
	    		"Tuesday" 	=> "Thứ ba",
	    		"Wednesday" => "Thứ tư",
	    		"Thursday" 	=> "Thứ năm",
	    		"Friday" 	=> "Thứ sáu",
	    		"Saturday" 	=> "Thứ bảy",
	    		"Sunday" 	=> "Chủ nhật",
	    	);
	        $donvi_truycap = $this->uri->segment(2);
	    	$session	= $this->session->userdata('user');
	    	$this->checkPhien($session,$donvi_truycap);


	    	$data['message'] = getMessages();
	    	$temp['data'] = $data;
        	$temp['template'] = 'quanlychamcong/Vchamcong_donvi';
        	$this->load->view('layout/content', $temp);
	    }
	    public function checkPhien($session,$num)
	    {
	    	if($session['maquyen']!=1){
				$phancong = $this->MChamcongdonvi->checkCanbo_Phancong($session['mapc'],$num);
				//có dũ liệu của cán bộ đang quản lý đơn vị này
				if(!empty($phancong)){
					//được xem dữ liệu
				}else{
					//không có dữ liệu đẩy về trang thông tin tổng quát
					setMessages('warning','Bạn không có quyền chấm công đơn vị này','Thông báo');
					return redirect('chamcongdonvi');
				}
	    	}
	    	// admin tự động được xem toàn bộ
	    }
	}
 ?>