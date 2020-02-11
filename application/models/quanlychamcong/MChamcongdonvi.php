<?php 
	class MChamcongdonvi extends MY_Model
	{
		public function checkCanbo_Phancong($macanbo,$madonviphancong)
		{
			$this->db->select('*');
			$this->db->where('iMa_canbo',$macanbo);
			$this->db->where('iMa_donvi_quanly',$madonviphancong);
			$this->db->from('tbl_canbo_chucvu');
			$result = $this->db->get()->result_array();
			return $result;
		}
    }