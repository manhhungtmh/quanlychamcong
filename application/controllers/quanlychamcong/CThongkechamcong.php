<?php 
	/**
	 * summary
	 */
	class CThongkechamcong extends MY_Controller
	{
	    /**
	     * summary
	     */
	    public function __construct()
	    {
	        parent::__construct();
	       	$this->load->library('Excel');
	    }
	    public function index(){
	    	if($this->input->post("xuatexcel")){
	    		$this->xuatexcel();
	    	}
	    	$session          = $this->session->userdata('user');
	    	$data['message'] = getMessages();
	    	$temp['data'] = $data;
        	$temp['template'] = 'quanlychamcong/VThongkechamcong';
        	$this->load->view('layout/content', $temp);
	    }
	    public function xuatexcel(){
	    	$objPHPExcel =new PHPExcel();
            $filename='Chấm công_Tháng 1_Năm 2020';
            $objPHPExcel->getProperties()->setCreator("FFC")
                                             ->setLastModifiedBy("Administrator")
                                             ->setTitle("Phụ lục 8.1")
                                             ->setSubject("Phụ lục 8.1");
            $objPHPExcel->getDefaultStyle()->getFont()->setName('Times new Roman')->setSize(11);


            /**********************************************************************
            ****************          FILE EXCEL 8.1               ****************
            ****************                                       ****************
            ***********************************************************************/
            $objPHPExcel->getActiveSheet()->setTitle("T-01");
            $session = $this->session->userdata('user');
            // $data = $this->Mtapchi->getDocument($session['baseId']);
            $dem = 10;
            //Border
            $styleArray = array(
                'borders' => array(
                    'allborders' => array(
                        'style' => PHPExcel_Style_Border::BORDER_THIN
                    )
                )
            );
            $objPHPExcel->getActiveSheet()->getStyle('B5:BE15')->applyFromArray($styleArray);
            unset($styleArray);
            // Sét backgroundcolor 
            $objPHPExcel->getActiveSheet()->getStyle('A1:BE4')->applyFromArray(
			    array(
			        'fill' => array(
			            'type' => PHPExcel_Style_Fill::FILL_SOLID,
			            'color' => array('rgb' => 'FFFFFF')
			        )
			    )
			);
            // Căn cỡ cột tự động
            foreach(range('A','Z') as $columnID){
                    $objPHPExcel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
            }

            // Căn cỡ hàng tự động
            foreach($objPHPExcel->getActiveSheet()->getRowDimensions() as $rd) {
                $rd->setRowHeight(-1);
            }

            //Xuống dòng
            $objPHPExcel->getActiveSheet()->getStyle('A5:H7')->getAlignment()->setWrapText(true);
            $objPHPExcel->getActiveSheet()->getStyle('AN6:BC7')->getAlignment()->setWrapText(true);
            // Merge cell
             $array_merge = array('D1:F1','E2:F2','T3:AD3','A5:A7','B5:B7','C5:C7','D5:D7','E5:E7','F5:F7','G5:G7','H5:H7','I5:O5','P5:W5','X5:AE5','AF5:AM5','AN5:AP5','U4:AB4',
             	//Merge cái ô loại nghỉ
             	'AN6:AN7','AO6:AO7','AP6:AP7','AQ6:AQ7','AR6:AR7','AS6:AS7','AT6:AT7','AU6:AU7','AV6:AV7','AW6:AW7','AX6:AX7','AY6:AY7','AZ6:AZ7','BA6:BA7','BB6:BB7','BC6:BC7','BD5:BD7','BE5:BE7'
             	//Merga Tổng cộng + Ghi chú
             );
             foreach($array_merge as $cell){
                 $objPHPExcel->getActiveSheet()->mergeCells($cell);
            }
            // Căn giữa ngang
             $canngang= array('B5:H5','AN5:BE5','E5','F5','G5','I6:AM7','T3:AD3','U4:AB4','AN6:BC7');
             foreach($canngang as $cell){
                 $objPHPExcel->getActiveSheet()->getStyle($cell)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
            }

            // Căn giữa dọc
            $array_vertical_center = array('A1:H15','U4:AB4','I7:AM7','AN6:BC7','BD5:BE7');
            foreach($array_vertical_center as $cell){
                $objPHPExcel->getActiveSheet()->getStyle($cell)->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
            }

            // In đậm
            $array_bold = array('A1','A3','A5:H5','BD5:BE7','V3:AB3','E2:F2','I6:AM6','AN5:BC5','T3:AD3');
            foreach($array_bold as $cell){
                $objPHPExcel->getActiveSheet()->getStyle($cell)->getFont()->setBold(true);
            }

            // In nghiêng
            $array_italic = array();
            foreach($array_italic as $cell){
                $objPHPExcel->getActiveSheet()->getStyle($cell)->getFont()->setItalic(true);
            }

            // Chỉnh cỡ font
            $array_font_size = array(
                'A1' 		=> 12,
                'A3' 		=> 12,
                'B1:H8' 	=> 11,
                'T3:AD3' 	=> 14,
                'AJ1:AJ2' 	=> 8,
                'I5:AM5' 	=> 8,
                'AN6:BC7' 	=> 8
            );
            foreach($array_font_size as $key => $value){
                $objPHPExcel->getActiveSheet()->getStyle($key)->getFont()->setSize($value);
            }

            // Chỉnh cỡ cột
            $array_column = array(
                'A' => 1,
                'B' => 4,
                'C' => 4,
                'D' => 4,
                'E' => 10,
                'F' => 20,
                'G' => 7,
                'H' => 7,
                'I'	=> 4,
                'J'	=> 4,
                'K'	=> 4,
                'L'	=> 4,
                'M'	=> 4,
                'N'	=> 4,
                'O'	=> 4,
                'P'	=> 4,
                'Q'	=> 4,
                'R'	=> 4,
                'S'	=> 4,
                'T'	=> 4,
                'U'	=> 4,
                'V'	=> 4,
                'W'	=> 4,
                'X'	=> 4,
                'Y'	=> 4,
                'Z'	=> 4,
                'AA'	=> 4,
                'AB'	=> 4,
                'AC'	=> 4,
                'AD'	=> 4,
                'AE'	=> 4,
                'AF'	=> 4,
                'AG'	=> 4,
                'AH'	=> 4,
                'AI'	=> 4,
                'AJ'	=> 4,
                'AK'	=> 4,
                'AL'	=> 4,
                'AM'	=> 4,
                'AN'	=> 6,
                'AO'	=> 6,
                'AP'	=> 7,
                'AQ'	=> 6,
                'AR'	=> 6,
                'AS'	=> 6,
                'AT'	=> 6,
                'AU'	=> 6,
                'AV'	=> 6,
                'AW'	=> 6,
                'AX'	=> 6,
                'AY'	=> 6,
                'AZ'	=> 6,
                'BA'	=> 6,
                'BB'	=> 6,
                'BC'	=> 6,
                'BD'	=> 5

            );
            foreach($array_column as $key => $value){
                $objPHPExcel->getActiveSheet()->getColumnDimension($key)->setAutoSize(FALSE);
                $objPHPExcel->getActiveSheet()->getColumnDimension($key)->setWidth($value);
            }

            //Chỉnh cỡ hàng fix cứng

            $array_row = array(
        		'4' => 18,
        		'7' => 30
            );
            foreach($array_row as $key => $value){
                $objPHPExcel->getActiveSheet()->getRowDimension($key)->setRowHeight($value);
            }
            //filter excel
            $objPHPExcel->getActiveSheet()->setAutoFilter('B8:BE8');
            // Quay dọc chữ
            $objPHPExcel->getActiveSheet()->getStyle('AQ6')->getAlignment()->setTextRotation(-90);
            $objPHPExcel->getActiveSheet()->getStyle('BD5')->getAlignment()->setTextRotation(-90);
            //*******************************************
            //************* NỘI DUNG ********************
            //*******************************************

            $array_content = array(
                'D1' => 'TRƯỜNG ĐẠI HỌC MỞ HÀ NỘI',
                'E2' => '<ĐƠN VỊ>',
                'A5' => '',
                'B5' => 'Xử lý In',
                'C5' => 'TT',
                'D5' => 'TT ĐV',
                'E5' => 'Mã ĐT',
                'F5' => 'Họ và Tên',
                'G5' => 'Đơn vị',
                'T3' => 'BẢNG CHẤM CÔNG',
                'U4' => 'Tháng 3 Năm 2020',
                'I5' => 'Tự chủ toàn diện',
                'P5' => 'Công nghệ hiện đại',
                'X5' => 'Dịch vụ hoàn hảo',
                'AF5' => 'Kết nối mở rộng',
                'AN5' => 'TỔNG HỢP',
                'AJ1' => 'Hanoi Open University',
                'AJ2' => 'Learning Opportunity for All',
                'AN6' => 'Số công hưởng lương thời gian',
                'AO6' => 'Số công nghỉ không lương', 
                'AP6'	=> 'Số công hưởng BHXH6',
                'AQ6'	=> 'Tổng cộng',
                'AR6'	=> 'Nghỉ Lễ, Tết',
                'AS6'	=> 'Lương thời gian',
                'AT6'	=> 'Phép',
                'AU6'	=> 'Hội nghị, học tập',
                'AV6'	=> 'Nghỉ bù',
                'AW6'	=> 'Nghỉ việc riêng',
                'AX6'	=> 'Nghỉ không lương',
                'AY6'	=> 'Ốm, điều dưỡng',
                'AZ6'	=> 'Con ốm',
                'BA6'	=> 'Thai sản',
                'BB6'	=> 'Tai nạn',
                'BC6'	=> 'Ngừng việc',
                'BD5'	=> 'Tổng cộng',
                'BE5'	=> 'Ghi chú',
                'AR5'	=> 'LT',
                'AS5'	=> 'X',
                'AT5'	=> 'P',
                'AU5'	=> 'H',
                'AV5'	=> 'B',
                'AW5'	=> 'R',
                'AX5'	=> 'K',
                'AY5'	=> 'O',
                'AZ5'	=> 'C',
                'BA5'	=> 'T',
                'BB5'	=> 'Tn',
                'BC5'	=> 'N',
                'I6'	=> '1',
                'J6'	=> '2',
                'K6'	=> '3',
                'L6'	=> '4',
                'M6'	=> '5',
                'N6'	=> '6',
                'O6'	=> '7',
                'P6'	=> '8',
                'Q6'	=> '9',
                'R6'	=> '10',
                'S6'	=> '11',
                'T6'	=> '12',
                'U6'	=> '13',
                'V6'	=> '14',
                'W6'	=> '15',
                'X6'	=> '16',
                'Y6'	=> '17',
                'Z6'	=> '18',
                'AA6'	=> '19',
                'AB6'	=> '20',
                'AC6'	=> '21',
                'AD6'	=> '22',
                'AE6'	=> '23',
                'AF6'	=> '24',
                'AG6'	=> '25',
                'AH6'	=> '26',
                'AI6'	=> '27',
                'AJ6'	=> '28',
                'AK6'	=> '29',
                'AL6'	=> '30',
                'AM6'	=> '31',
                // ----fix cứng để dàn mẫu----
                'I7'	=> 'T2',
                'J7'	=> 'T3',
                'K7'	=> 'T4',
                'L7'	=> 'T5',
                'M7'	=> 'T6',
                'N7'	=> 'T7',
                'O7'	=> 'CN',
                'P7'	=> 'T2',
                'Q7'	=> 'T3',
                'R7'	=> 'T4',
                'S7'	=> 'T5',
                'T7'	=> 'T6',
                'U7'	=> 'T7',
                'V7'	=> 'CN',
                'W7'	=> 'T2',
                'X7'	=> 'T3',
                'Y7'	=> 'T3',
                'Z7'	=> 'T4',
                'AA7'	=> 'T5',
                'AB7'	=> 'T6',
                'AC7'	=> 'T7',
                'AD7'	=> 'CN',
                'AE7'	=> 'T2',
                'AF7'	=> 'T3',
                'AG7'	=> 'T4',
                'AH7'	=> 'T5',
                'AI7'	=> 'T6',
                'AJ7'	=> 'T7',
                'AK7'	=> 'CN',
                'AL7'	=> 'T2',
                'AM7'	=> 'T3',
                // END----fix cứng để dàn mẫu----
            );

            // $indexRow = 6;
            $session = $this->session->userdata('user');
            // $data = $this->Mtapchi->getDocument($session['baseId']);
            // if (empty ($data))
            // {
            //     echo "
            //         Không có dữ liệu. Cán bộ vui lòng cập nhật dữ liệu vào
            //         các ô nhập liệu trước mới có thể xuất báo cáo.
            //         <br> Bấm <a href='".current_url()."'>vào đây</a> để trở về trang cập nhật kết quả
            //         nckh &amp; chuyển giao công nghệ
            //     ";
            //     exit;
            // }

            // foreach ($data AS $k => $v)
            // {
            //     $array_content['A'.$indexRow] = $k+1;
            //     $array_content['B'.$indexRow] = $v['ten'];
            //     $array_content['C'.$indexRow] = $v['theloai'];
            //     $array_content['D'.$indexRow] = $v['namphathanh'];
            //     $array_content['E'.$indexRow] = $v['kyxuatban'];
            //     $array_content['F'.$indexRow] = $v['diemtoida'];
            //     $array_content['G'.$indexRow] = $v['isbn'];
            //     $array_content['H'.$indexRow] = $v['khoinganh'];
            //     $indexRow++;
            // }

            // Muốn thêm nội dung động thì foreach array push là xong.
            foreach($array_content as $key => $value){
                $objPHPExcel->getActiveSheet()->setCellValue($key,$value);
            }

            // End chỉnh sửa nội dung
            // ob_end_clean();
            if (ob_get_contents()) ob_end_clean();

            header("Content-type: application/vnd.ms-excel");
            header("Content-Disposition: attachment;filename=".$filename.".xls");
            header("Cache-Control: max-age=0");

            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
            $objWriter->save('php://output');
            exit();
	    }
        public function previewtt(){
            $data['message'] = getMessages();
            $this->parser->parse('quanlychamcong/Preview_thongke',$data);
        }
	}
 ?>