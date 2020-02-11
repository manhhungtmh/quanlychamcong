<?php 
	/**
	 * summary
	 */
	class CThongke_donvi extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('quanlychamcong/MThongke_donvi');
	    }
	    public function index(){
	    	$session = $this->session->userdata('user');
	    	$data['donvi'] = $this->MThongke_donvi->getDonvi();
	    	$data['message'] = getMessages();
	    	$temp['data'] = $data;
        	$temp['template'] = 'quanlychamcong/VThongke_donvi';
        	$this->load->view('layout/content', $temp);
	    }
	}
 ?>