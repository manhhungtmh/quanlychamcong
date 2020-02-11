<?php 
	class MThongke_donvi extends MY_Model
	{
		public function getDonvi()
		{
			$donvi = $this->db->get('tbl_donvi')->result_array();
			return($donvi);
		}
    }