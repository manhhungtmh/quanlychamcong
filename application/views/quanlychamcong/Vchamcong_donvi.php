<div class="col-md-12" style="min-height: 580px;">
	<div class="content-box-large">
		<div class="panel-title"><br> &nbsp;&nbsp; Danh sách cán bộ trong đơn vị</div>
		<div class="panel-heading">
			<div class="row">
				<div class="col-md-3">
					<div class="bfh-selectbox" data-name="selectbox3" data-value="17" data-filter="true">
					  <div data-value="1">Tài chính – Ngân hàng</div>
					  <div data-value="2">Quản trị kinh doanh</div>
					  <div data-value="3">Thương mại điện tử</div>
					  <div data-value="4">Luật</div>
					  <div data-value="5">Luật kinh tế</div>
					  <div data-value="6">Luật quốc tế</div>
					  <div data-value="7">Công nghệ sinh học </div>
					  <div data-value="8">Công nghệ thông tin</div>
					  <div data-value="9">Thiết kế công nghiệp</div>
					  <div data-value="10">Công nghệ kỹ thuật điện tử- viễn thông</div>
					  <div data-value="11">Công nghệ kỹ thuật điều khiển và tự động hóa</div>
					  <div data-value="12">Kiến trúc</div>
					  <div data-value="13">Công nghệ thực phẩm</div>
					  <div data-value="14">Ngôn ngữ Anh</div>
					  <div data-value="15">Ngôn ngữ Trung Quốc</div>
					  <div data-value="16">Phòng Tổ chức - Hành chính</div>
					  <div data-value="17">Phòng Quản lý đào tạo</div>
					</div>
				</div>
					<div class="col-md-2">
						<div class="bfh-selectbox" data-name="selectbox3" data-value="2" data-filter="true">
						  <div data-value="1" class="text-center">----Chọn Năm----</div>
						  <div data-value="2" class="text-center">Năm 2020</div>
						  <div data-value="3" class="text-center">Năm 2019</div>
						  <div data-value="4" class="text-center">Năm 2018</div>
						  <div data-value="5" class="text-center">Năm 2017</div>
						</div>
					</div>
					<div class="col-md-2">
						<div class="bfh-selectbox" data-name="selectbox3" data-value="2" data-filter="true">
						  <div data-value="1" class="text-center">----Chọn Tháng----</div>
						  <div data-value="2" class="text-center">Tháng 1</div>
						  <div data-value="3" class="text-center">Tháng 2</div>
						  <div data-value="4" class="text-center">Tháng 3</div>
						  <div data-value="5" class="text-center">Tháng 4</div>
						  <div data-value="5" class="text-center">Tháng 5</div>
						  <div data-value="5" class="text-center">Tháng 6</div>
						  <div data-value="5" class="text-center">Tháng 7</div>
						  <div data-value="5" class="text-center">Tháng 8</div>
						  <div data-value="5" class="text-center">Tháng 9</div>
						  <div data-value="5" class="text-center">Tháng 10</div>
						  <div data-value="5" class="text-center">Tháng 11</div>
						  <div data-value="5" class="text-center">Tháng 12</div>
						</div>
					</div>
					<div class="col-md-2">
						<button class="btn btn-primary">Chọn</button>
					</div>
			</div>

	</div>
		<div class="panel-body">
			<div style="overflow-x:auto;">
				<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
					<thead>
						<tr>
							<th rowspan="2" >STT</th>
							<th rowspan="2" class="text-center"  style="min-width: 130px;">Họ tên</th>
							<th rowspan="2" class="text-center">Ngày sinh</th>
							<th rowspan="2" class="text-center" style="min-width: 50px;">Giới tính</th>
							<th rowspan="2" class="text-center" style="min-width: 80px;">Chức danh</th>
							<th rowspan="2" class="text-center" style="min-width: 50px;">Chấm công</th>
							{$dateToTest = date("Y-m-d")}
							{$lastday = date('t',strtotime($dateToTest))}
							{for $i=1; $i<=$lastday; $i++}
								<th class="text-center" style="min-width: 8px;">{$i}</th>
							{/for}
						</tr>
						<tr>
							{$dateToTest = date("Y-m-d")}
							{$lastday = date('t',strtotime($dateToTest))}

							{for $i=1; $i<=$lastday; $i++}
								{$str = "2020-02-`$i`"}
								{$date = DateTime::createFromFormat('Y-m-d', $str)}
								<th class="text-center noname" style="min-width: 8px;">{$tengibaygio[$date->format('l')]}</th>
							{/for}
						</tr>
					</thead>
					<tbody>
						<tr class="gradeA">
							<td class="text-center">1</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
		 							 Nguyễn Duy Thành
								</a>
							</td>
							<td class="text-center">07/05/1999</td>
							<td class="text-center">Nữ</td>
							<td class="text-center">Nhân viên</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							<!-- <input type="checkbox" name=""> -->
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">
								<select  class="form-control loainghi" id="" ="select-1">
									<option value="no" selected="selected"></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
						<tr class="gradeA">
							<td class="text-center">2</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
										 Đỗ Thị Tuyên
								</a>
							</td>
							<td class="text-center">22/10/1998</td>
							<td class="text-center">Nam</td>
							<td class="text-center">Giảng viên</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
						<tr class="gradeC">
							<td class="text-center">3</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
										 Nguyễn Quốc Thành
								</a>
							</td>
							<td class="text-center">13/04/1998</td>
							<td class="text-center">Nam</td>
							<td class="text-center">Giảng viên</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
						<tr class="gradeA">
							<td class="text-center">4</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
									Nguyễn Thị Thúy
								</a>
							</td>
							<td class="text-center">03/07/1998</td>
							<td class="text-center">Nam</td>
							<td class="text-center">Giảng viên</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
						<tr class="gradeA">
							<td class="text-center">5</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
								Nguyễn Văn Bảo
								</a>
							</td>
							<td class="text-center">10/09/1999</td>
							<td class="text-center">Nam</td>
							<td class="text-center">GV Cao cấp</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
												<tr class="gradeA">
							<td class="text-center">5</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
								Nguyễn Văn Bảo
								</a>
							</td>
							<td class="text-center">10/09/1999</td>
							<td class="text-center">Nam</td>
							<td class="text-center">GV Cao cấp</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
												<tr class="gradeA">
							<td class="text-center">5</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
								Nguyễn Văn Bảo
								</a>
							</td>
							<td class="text-center">10/09/1999</td>
							<td class="text-center">Nam</td>
							<td class="text-center">GV Cao cấp</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
												<tr class="gradeA">
							<td class="text-center">5</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
								Nguyễn Văn Bảo
								</a>
							</td>
							<td class="text-center">10/09/1999</td>
							<td class="text-center">Nam</td>
							<td class="text-center">GV Cao cấp</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
												<tr class="gradeA">
							<td class="text-center">5</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
								Nguyễn Văn Bảo
								</a>
							</td>
							<td class="text-center">10/09/1999</td>
							<td class="text-center">Nam</td>
							<td class="text-center">GV Cao cấp</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
												<tr class="gradeA">
							<td class="text-center">5</td>
							<td>
								<a  data-toggle="modal" data-target="#exampleModalCenter">
								Nguyễn Văn Bảo
								</a>
							</td>
							<td class="text-center">10/09/1999</td>
							<td class="text-center">Nam</td>
							<td class="text-center">GV Cao cấp</td>
							<td class ="text-center">
								<div class="btn-group">
				                    <button type="button" class="btn btn-primary dropdown-toggle btn-xs" data-toggle="dropdown">
				                      <i class="glyphicon glyphicon-pencil"> </i><span class="caret"></span>
				                    </button>
				                    <ul class="dropdown-menu chamcongnhanh" role="menu">
				                    	<li><a href="#" data-value="no">Hủy</a></li>
				                      	<li><a href="#" data-value="LT">Nghỉ Lễ, Tết</a></li>
				                      	<li><a href="#" data-value="B">Nghỉ bù</a></li>
				                      	<li><a href="#" data-value="C">Con ốm</a></li>
				                      	<li><a href="#" data-value="X">Lương thời gian</a></li>
				                      	<li><a href="#" data-value="R">Nghỉ việc riêng</a></li>
				                      	<li><a href="#" data-value="T">Thai sản</a></li>
				                      	<li><a href="#" data-value="P">Phép</a></li>
				                      	<li><a href="#" data-value="K">Nghỉ không lương</a></li>
				                      	<li><a href="#" data-value="Tn">Tai nạn</a></li>
				                      	<li><a href="#" data-value="O">Ốm, điều dưỡng</a></li>
				                      	<li><a href="#" data-value="N">Ngừng việc</a></li>
				                    </ul>
				                 </div>
							</td>
							{for $i=1; $i<=$lastday; $i++}
							<td style="min-width: 8px;">												
								<select  class="form-control loainghi" id="select-1">
									<option value="no" selected></option>
									<option value="X" name ="dilam">X</option>
									<option value="LT">LT</option>
									<option value="P">P</option>
									<option value="H">H</option>
									<option value="B">B</option>
									<option value="R">R</option>
									<option value="K">K</option>
									<option value="O">O</option>
									<option value="C">C</option>
									<option value="T">T</option>
									<option value="Tn">Tn</option>
									<option value="N">N</option>
								</select>
							</td>
							{/for}
						</tr>
					</tbody>
				</table>
			</div>
			<br>
			<div class="text-center">
				<button class="btn btn-success">Lưu</button>
			</div>
			<br>
			<h4 style="color: red;">*Chú thích:</h4>
			<div class="row">
				<div class="col-md-3"><h4>LT: Nghỉ Lễ, Tết</h4></div>
				<div class="col-md-3"><h4>X: Lương thời gian</h4></div>
				<div class="col-md-3"><h4>P: Phép</h4></div>
				<div class="col-md-3"><h4>H: Hội nghị, học tập</div>
			</div>
			<div class="row">
				<div class="col-md-3"><h4>B: Nghỉ bù</h4></div>
				<div class="col-md-3"><h4>R: Nghỉ việc riêng</h4></div>
				<div class="col-md-3"><h4>K: Nghỉ không lương</h4></div>
				<div class="col-md-3"><h4>O: Ốm, điều dưỡng</h4></div>
			</div>
			<div class="row">
				<div class="col-md-3"><h4>C: Con ốm</h4></div>
				<div class="col-md-3"><h4>T: Thai sản</h4></div>
				<div class="col-md-3"><h4>Tn: Tai nạn</h4></div>
				<div class="col-md-3"><h4>N: Ngừng việc</h4></div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h4 class="modal-title" id="exampleModalLongTitle">Thông tin chi tiết</h4></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<table class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th class="text-center">Thông tin</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>TT ĐV</td>
              <td style="color: #00994d;">ĐV09</td>
            </tr>
            <tr>
              <td>Mã ĐT</td>
              <td style="color: #00994d;">MN0548</td>
            </tr>
            <tr>
              <td>Họ tên</td>
              <td style="color: #00994d;">Trần Mạnh Hùng</td>
            </tr>            
            <tr>
              <td>Ngày sinh</td>
              <td style="color: #00994d;">24/04/1999</td>
            </tr>            
            <tr>
              <td>Giới tính</td>
              <td style="color: #00994d;">Nam</td>
            </tr>
            <tr>
              <td>Mã ngạch</td>
              <td style="color: #00994d;">V.07.01.03</td>
            </tr>
            <tr>
              <td>Chức danh</td>
              <td style="color: #00994d;">GV chính</td>
            </tr>            
            <tr>
              <td>Ngày về Trường</td>
              <td style="color: #00994d;">01/2011</td>
            </tr>            
            <tr>
              <td>Về Viện Trường thức</td>
              <td style="color: #00994d;">01/2011</td>
            </tr>            
            <tr>
              <td>Đơn vị</td>
              <td style="color: #00994d;">LĐT</td>
            </tr>            
            <tr>
              <td>Chức vụ</td>
              <td style="color: #00994d;">Trưởng phòng</td>
            </tr>            
            <tr>
              <td>Loại Biên chế</td>
              <td style="color: #00994d;">HĐ làm việc</td>
            </tr>
            <tr>
              <td>Số buổi được phép nghỉ trong năm</td>
              <td style="color: #4d79ff;">30</td>
            </tr>
            <tr>
              <td>Số buổi đã nghỉ trong năm</td>
              <td style="color: #4d79ff;">14</td>
            </tr>
            <tr>
              <td>Số buổi còn lại được nghỉ trong năm</td>
              <td style="color: #4d79ff;">16</td>
            </tr>     
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
      </div>
    </div>
  </div>
</div>
<style>
	table {
	  border-collapse: collapse;
	  border-spacing: 0;
	  width: 100%;
	  border: 1px solid #ddd;
	}
</style>
<script>
		$('input[type=checkbox]').change(function(){
		    // if is checked
		    if(this.checked){
		        // check all children
		        var lenchk = $(this).closest('tr').find('option');
		        // var lenchkChecked = $(this).closest('tr').find('option[value="no"]').removeAttr('selected');
		        var lenchkChecked = $(this).closest('tr').find('option[value="no"]').attr('selected',false);
		        var lenchkChecked = $(this).closest('tr').find('option[value="X"]').attr('selected',true);
		        console.log(lenchkChecked);
		        //if all siblings are checked, check its parent checkbox
		        // if (lenchk.length == lenchkChecked.length) {
		            // $(this).closest('tr').siblings().children('option[value="X"]').attr('selected','selected');
		        // }else{
		            // $(this).closest('.checkbox').siblings().find(':checkbox').prop('checked', true);
		        // }
		    } else {
		    	var lenchk = $(this).closest('tr').find('option');
		    	var lenchkChecked = $(this).closest('tr').find('option[value="X"]').attr('selected',false);
		    	var lenchkChecked = $(this).closest('tr').find('option[value="no"]').attr('selected',true);
		    	// var lenchkChecked = $(this).closest('tr').find('option[value="no"]').attr('selected','selected');
		        // $(this).closest('tr').siblings().children('option[value="X"]').removeAttr('selected' 
		        // uncheck all children
		        // $(this).closest('.checkbox').siblings().find(':checkbox').prop('checked', false);
		        // $(this).closest('ul').siblings().find(':checkbox').prop('checked', false);
		    }
		});
</script>

<script type="text/javascript">
	// mcvp9x :)) //
	$(".chamcongnhanh").on("click","a", function(e){
		e.preventDefault();
		const self = $(this);

		const val = self.attr("data-value");

		const select = self.parent().parent().parent().parent().parent().find("select");

		//lay mang thu 7, chu nhat

		const arrContinue = [];
		const thu = $(".noname");
		for(let i = thu.length-1; i>=0; --i){
			console.log(thu.eq(i).text());
			if(thu.eq(i).text() == "Thứ bảy" || thu.eq(i).text() == "Chủ nhật"){
				continue;		
			}
			select.eq(i).val(val);
		}

		
	});
</script>