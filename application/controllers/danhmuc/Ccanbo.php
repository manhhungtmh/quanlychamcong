<?php  
class Ccanbo extends CI_Controller
{
	 public function __construct()
		{
			parent::__construct();
			$this->load->model('danhmuc/Mcanbo');
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
			'template'			=> 'danhmuc/Vcanbo',
			'data' => array(
				/*'message'		=> getMessages(),*/
				'canbo' 		=> $this->Mcanbo->getListcanbo(),
				'donvi' 		=> $this->Mcanbo->getListdonvi(),
				'chucvu' 		=> $this->Mcanbo->getListchucvu(),
				'loaibienche' 		=> $this->Mcanbo->getListloaibienche(),
				'sua' 			=> $this->Mcanbo->getdata($id),
			),
		);
		$temp['data']['message'] = getMessages(); 
		$this->load->view("layout/content",$temp);
	}
	public function insert(){		
		$data = array(
			'iMa_DTC' 	 		=> $this->input->post('iMa_DTC'),
			'iMa_DTM' 	 		=> $this->input->post('iMa_DTM'),
			'sTen_Canbo' 		=> $this->input->post('sTen_Canbo'),
			'sNgaySinh'  		=> $this->input->post('sNgaySinh'),
			'sGioiTinh'  		=> $this->input->post('sGioiTinh'),
			'sMa_ngach'  		=> $this->input->post('sMa_ngach'),
			'sChucDanh'  		=> $this->input->post('sChucDanh'),
			'sNgayVeTrg'  		=> $this->input->post('sNgayVeTrg'),
			'sNgayVeTrgThuc' 	=> $this->input->post('sNgayveTrgThuc'),
			'iMa_donvi' 		=> $this->input->post('donvi'),
			'iMa_chucvu' 		=> $this->input->post('chucvu'),
			'iMa_loai' 			=> $this->input->post('loaibienche'),
		);		
		$row = $this->Mcanbo->insert($data);
		if($row > 0){
			setMessages('success','Thông báo','Thêm thành công');
			return redirect('canbo');
		} 		
	}
	
	public function delete(){
		$ma = $this->input->post("delete");
		$checkf = $this->Mcanbo->checkfk($ma);
		if($checkf['iMa_canbo']){
			$row = $this->Mcanbo->delete($ma);
			setMessages('success','Thông báo','Xóa thành công');
			return redirect('canbo');
		}
		else 
		{
			setMessages('error','Thông báo','Xóa không thành công');
			return redirect('canbo');
		}
	}
	public function update(){
		$data = array(
			'iMa_DTC' 	 		=> $this->input->post('iMa_DTC'),
			'iMa_DTM' 	 		=> $this->input->post('iMa_DTM'),
			'sTen_Canbo' 		=> $this->input->post('sTen_Canbo'),
			'sNgaySinh'  		=> $this->input->post('sNgaySinh'),
			'sGioiTinh'  		=> $this->input->post('sGioiTinh'),
			'sMa_ngach'  		=> $this->input->post('sMa_ngach'),
			'sChucDanh'  		=> $this->input->post('sChucDanh'),
			'sNgayVeTrg'  		=> $this->input->post('sNgayVeTrg'),
			'sNgayVeTrgThuc' 	=> $this->input->post('sNgayveTrgThuc'),
			'iMa_donvi' 		=> $this->input->post('donvi'),
			'iMa_chucvu' 		=> $this->input->post('chucvu'),
			'iMa_loai' 			=> $this->input->post('loaibienche'),
		);
		$id = $this->input->post('capnhat');
		$row = $this->Mcanbo->updateData($id,$data);
		if($row >0){
			setMessages('success','Thông báo','Cập nhật thành công');
			return redirect('canbo');
		}
		else{
			return redirect('canbo');
		}
	}

}
?>