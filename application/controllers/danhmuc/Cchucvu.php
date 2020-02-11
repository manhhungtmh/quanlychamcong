<?php  
class Cchucvu extends CI_Controller
{
	 public function __construct()
		{
			parent::__construct();
			$this->load->model('danhmuc/Mchucvu');
		}
	public function index(){
		if($this->input->post('them')){
			return $this->insert();
		} 
		if($this->input->post('delete')){
			return $this->delete();
		}
		if($this->input->post('edit')){
			$id = $this->input->post('edit');
			$temp['data']['sua'] = $this->Mchucvu->getdata($id);
		}
		if ($this->input->post('capnhat')) {
			return $this->update();
		}
		$temp['data']['ds'] 	= $this->Mchucvu->getListchucvu();
		$temp['template'] 		= 'danhmuc/Vchucvu';

		$temp['data']['message'] = getMessages(); 
		$this->load->view("layout/content",$temp);
	}
	public function insert(){
		if($this->input->post('them')){
			$data = array(
				'iMa_chucvu' 	 		=> time(),
				'sTen_chucvu' 	 		=> $this->input->post('sTen_chucvu'),
				'sTen_chucvu_vt' 	 		=> $this->input->post('sTen_chucvu_vt'),
			);
			$row = $this->Mchucvu->insert($data);
		if($row > 0){
			setMessages('success','Thông báo','Thêm thành công');
			return redirect('chucvu');
			} 
		
		}
	}
	public function delete(){
		$ma = $this->input->post("delete");
		$checkf = $this->Mchucvu->checkfk($ma);
		if($checkf['iMa_chucvu']){
			$row = $this->Mchucvu->delete($ma);
			setMessages('success','Thông báo','Xóa thành công');
			return redirect('chucvu');
		}
		else 
		{
			setMessages('error','Thông báo','Xóa không thành công');
			return redirect('chucvu');
		}
	}
	public function update(){
		$data = array(
			'sTen_chucvu' 	 		=> $this->input->post('sTen_chucvu'),
			'sTen_chucvu_vt' 	 		=> $this->input->post('sTen_chucvu_vt'),
		);
		$id = $this->input->post('capnhat');
		$row = $this->Mchucvu->updateData($id,$data);
		if($row >0){
			setMessages('success','Thông báo','Cập nhật thành công');
			return redirect('chucvu');
		}
		else{
			return redirect('chucvu');
		}
	}
}