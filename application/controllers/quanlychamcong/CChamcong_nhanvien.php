<?php 
	/**
	 * summary
	 */
	class CChamcong_nhanvien extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	    }
	    public function index(){
	    	$session          = $this->session->userdata('user');
	    	$data['message'] = getMessages();
	    	$temp['data'] = $data;
        	$temp['template'] = 'quanlychamcong/VChamcong_nhanvien';
        	$this->load->view('layout/content', $temp);
	    }
	}
 ?>