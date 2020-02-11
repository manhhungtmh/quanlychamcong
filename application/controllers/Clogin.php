<?php 
	/**
	 * summary
	 */
	 class Clogin extends CI_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	    	parent::__construct();
	    	$this->load->model('Mlogin');
	    }
	    public function index(){
	    	$this->session->unset_userdata('user');
	    	if($this->input->post('dangnhap')){
	    		$data['tb'] = $this->check();
	    	}

	    	$data['message'] = getMessages();
	    	$this->parser->parse('Vlogin',$data);
	    }
	    public function check(){
	    	$user       = $this->input->post('username');
	    	$passwork   = $this->input->post('password');
	    	$check_user = $this->Mlogin->get_many_where('tbl_taikhoan', array('sTen_TK' => $user, 'sMatKhau' => sha1($passwork)));
	    	if(!empty($check_user)){
	    		$get_tecb  = $this->Mlogin->get_where('tbl_canbo','iMa_canbo',$check_user[0]['iMa_TK']);
	    	}
	    	if(!empty($check_user)){
	    		$session = array(
	    			'macb'    => $check_user[0]['iMa_TK'],
	    			'maquyen' => $check_user[0]['iMa_Quyen'],
	    			'tencb'   => $get_tecb[0]['sTen_Canbo'],
	    			'mapc'	  => $check_user[0]['iMa_canbo'],
	    		);
	    		// pr($session);
	    		$this->session->set_userdata('user', $session);
				setMessages('success','Đăng nhập thành công','Thông báo');
	    		return redirect('Welcome');
	    		
	    	}else{
	    		return "Tài khoản hoặc mật khẩu không đúng!";
	    	}
	    }
	    public function logout(){
	    	$this->session->userdata = array();
	    	$this->session->sess_destroy();
	    	$this->input->set_cookie('', '', time()-36000);
	    	return redirect(base_url());
	    }
	}
	?>