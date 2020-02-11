<?php  
class Cloaibienche extends CI_Controller
{
	 public function __construct()
		{
			parent::__construct();
			$this->load->model('danhmuc/Mloaibienche');
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
			$temp['data']['sua'] = $this->Mloaibienche->getdata($id);
		}
		if ($this->input->post('capnhat')) {
			return $this->update();
		}
		$temp['data']['ds'] 	= $this->Mloaibienche->getListloaibienche();
		$temp['template'] 		= 'danhmuc/Vloaibienche';

		$temp['data']['message'] = getMessages(); 
		$this->load->view("layout/content",$temp);
	}
	public function insert(){
		if($this->input->post('them')){
			$data = array(
				'iMa_loai' 	 	=> time(),
				'sTen_loai' 	=> $this->input->post('sTen_loai'),
			);
			$row = $this->Mloaibienche->insert($data);
		if($row > 0){
			setMessages('success','Thông báo','Thêm thành công');
			return redirect('loaibienche');
			} 
		
		}
	}
	public function delete(){
		$ma = $this->input->post("delete");
		$checkf = $this->Mloaibienche->checkfk($ma);
		if($checkf['iMa_loai']==null){
			$row = $this->Mloaibienche->delete($ma);
			setMessages('success','Thông báo','Xóa thành công');
			return redirect('loaibienche');
		}
		else 
		{
			setMessages('error','Thông báo','Xóa không thành công');
			return redirect('loaibienche');
		}
	}
	public function update(){
		$data = array(
			'sTen_loai' => $this->input->post('sTen_loai'),
		);
		$id = $this->input->post('capnhat');
		$row = $this->Mloaibienche->updateData($id,$data);
		if($row >0){
			setMessages('success','Thông báo','Cập nhật thành công');
			return redirect('loaibienche');
		}
		else{
			return redirect('loaibienche');
		}
	}
}