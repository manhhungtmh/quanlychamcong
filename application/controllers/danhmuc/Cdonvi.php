<?php  
class Cdonvi extends CI_Controller
{
	 public function __construct()
		{
			parent::__construct();
			$this->load->model('danhmuc/Mdonvi');
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
			$temp['data']['sua'] = $this->Mdonvi->getdata($id);
		}
		if ($this->input->post('capnhat')) {
			return $this->update();
		}
		$temp['data']['ds'] 	= $this->Mdonvi->getListdonvi();
		$temp['template'] 		= 'danhmuc/Vdonvi';

		$temp['data']['message'] = getMessages(); 
		$this->load->view("layout/content",$temp);
	}
	public function insert(){
		if($this->input->post('them')){
			$data = array(
				'iMa_donvi' 	 		=> time(),
				'sTen_donvi' 	 		=> $this->input->post('sTen_donvi'),
				'sTen_donvi_vt' 	 		=> $this->input->post('sTen_donvi_vt'),
			);
			$row = $this->Mdonvi->insert($data);
		if($row > 0){
			setMessages('success','Thông báo','Thêm thành công');
			return redirect('donvi');
			} 
		
		}
	}
	public function delete(){
		$ma = $this->input->post("delete");
		$checkf = $this->Mdonvi->checkfk($ma);
		if($checkf['iMa_donvi']){
			$row = $this->Mdonvi->delete($ma);
			setMessages('success','Thông báo','Xóa thành công');
			return redirect('donvi');
		}
		else 
		{
			setMessages('error','Thông báo','Xóa không thành công');
			return redirect('donvi');
		}
	}
	public function update(){
		$data = array(
			'sTen_donvi' 	 		=> $this->input->post('sTen_donvi'),
			'sTen_donvi_vt' 	 		=> $this->input->post('sTen_donvi_vt'),
		);
		$id = $this->input->post('capnhat');
		$row = $this->Mdonvi->updateData($id,$data);
		if($row >0){
			setMessages('success','Thông báo','Cập nhật thành công');
			return redirect('donvi');
		}
		else{
			return redirect('donvi');
		}
	}
}