<?php  
class Ctaikhoan extends CI_Controller
{
	 public function __construct()
		{
			parent::__construct();
			$this->load->model('danhmuc/Mtaikhoan');
		}
	public function index(){
		if($this->input->post('them')){
			return $this->insert();
		} 
		if($this->input->post('delete')){
			return $this->delete();
		}
		if ($this->input->post('capnhat')) {
			return $this->update();
		}
		$id = $this->input->post('edit');
		
		$temp = array(
			'template'			=> 'danhmuc/Vtaikhoan',
			'data' => array(
				/*'message'		=> getMessages(),*/
				'taikhoan' 		=> $this->Mtaikhoan->getListtaikhoan(),
				'quyen' 		=> $this->Mtaikhoan->getListquyen(),
				'canbo'		=> $this->Mtaikhoan->getListcanbo(),
				'sua' 			=> $this->Mtaikhoan->getdata($id),
			),
		);
		$temp['data']['message'] = getMessages(); 
		$this->load->view("layout/content",$temp);
	}
	public function insert(){		
		$data = array(
			'sTen_TK' 		=> $this->input->post('sTen_TK'),
			'sMatKhau' 		=> $this->input->post('sMatKhau'),
			'iMa_Quyen' 	=> $this->input->post('quyen'),
			'iMa_canbo' 	=> $this->input->post('canbo'),	
		);			
		$row = $this->Mtaikhoan->insert($data);
		if($row > 0){
			setMessages('success','Thông báo','Thêm thành công');
			return redirect('taikhoan');
		} 		
	}
	
	public function delete(){
		$ma = $this->input->post("delete");
		$checkf = $this->Mtaikhoan->checkfk($ma);
		if($checkf['iMa_TK']){
			$row = $this->Mtaikhoan->delete($ma);
			setMessages('success','Thông báo','Xóa thành công');
			return redirect('taikhoan');
		}
		else 
		{
			setMessages('error','Thông báo','Xóa không thành công');
			return redirect('taikhoan');
		}
	}
	public function update(){
		$data = array(
			'sTen_TK' 		=> $this->input->post('sTen_TK'),
			'sMatKhau' 		=> $this->input->post('sMatKhau'),
			'iMa_Quyen' 	=> $this->input->post('quyen'),
			'iMa_canbo' 	=> $this->input->post('canbo'),
		);
		$id = $this->input->post('capnhat');
		$row = $this->Mtaikhoan->updateData($id,$data);
		if($row >0){
			setMessages('success','Thông báo','Cập nhật thành công');
			return redirect('taikhoan');
		}
		else{
			return redirect('taikhoan');
		}
	}

}
?>