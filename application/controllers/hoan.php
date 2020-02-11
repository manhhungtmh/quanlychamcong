<?php
class hoan extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    public function index(){
       echo "<h1>Hệ thống đang nâp cấp. Vui lòng quay lại sau 14h ngày 14/04/2015</h1>";exit();
    }
}