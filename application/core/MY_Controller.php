<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
    protected $_session;
    protected $_manhom;

    public function __construct() {
        parent::__construct();
        // $this->load->model("canbo/Mthongbao");
        date_default_timezone_set('Asia/Bangkok');
        // if($this->input->post('action')=='_daxulyy'){
        // $id = $this->input->post('id');
        // $this->Mthongbao->daxuly_thongbao($id);
    // }
        if (!empty($this->session->userdata('user'))){
            $this->_session = $this->session->userdata('user');
            // Không có session, đá về trang đăng nhập
            if(!isset($this->_session) || empty($this->_session))
            {
                redirect(base_url().'login');
                exit();
            }
        }else{
            redirect(base_url());
            exit();
        }
    }

    public function getGroup(){
        $router = getSegment();
        $this->_manhom = $this->Mdangnhap->getManhomPL($router);
        return $this->_manhom;
    }
    
} // End class

