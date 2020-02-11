<div class="col-md-12" style="min-height: 580px;">
	<div class="content-box-large">
		<div class="panel-title"><br> &nbsp;&nbsp; Danh sách chi tiết các khoa</div>
		<div class="panel-body">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th>STT</th>
					<th class="text-center">Tên khoa</th>
					<th class="text-center">Số cán bộ chưa được chấm công</th>
					<th class="text-center">Số cán bộ đã được chấm công</th>
					<th class="text-center">Tổng số cán bộ trong khoa</th>
					<th class="text-center">Chi tiết</th>
				</tr>
			</thead>
			<tbody>
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">1</td>
					<td>Khoa tài chính ngân hàng</td>
					<td class="text-center text-danger">5</td>
					<td class="text-center text-success">25</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				</tr>
				{/if}
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">2</td>
					<td>Khoa công nghệ kỹ thuật điện tử viễn thông</td>
					<td class="text-center text-danger">3</td>
					<td class="text-center text-success">27</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				</tr>
				{/if}
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">3</td>
					<td>Khoa kiến trúc</td>
					<td class="text-center text-danger">6</td>
					<td class="text-center text-success">24</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				{/if}
				</tr>
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">4</td>
					<td>Khoa tiếng Anh</td>
					<td class="text-center text-danger">0</td>
					<td class="text-center text-success">30</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				{/if}
				</tr>
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">5</td>
					<td>Khoa tiếng Trung Quốc</td>
					<td class="text-center text-danger">3</td>
					<td class="text-center text-success">27</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				{/if}
				</tr>
				{if $session['mapc'] ==0 || $session['mapc'] == $donvi[0]['iMa_donvi']}
				<tr class="gradeA">
					<td class="text-center">6</td>
					<td>Khoa công nghệ thông tin</td>
					<td class="text-center text-danger">6</td>
					<td class="text-center text-success">24</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong/{$donvi[0]['iMa_donvi']}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				{/if}
				</tr>
				{if $session['mapc'] ==0 || $session['mapc'] == $donvi[1]['iMa_donvi']}
				<tr class="gradeA">
					<td class="text-center">7</td>
					<td>Khoa công nghệ sinh học</td>
					<td class="text-center text-danger">0</td>
					<td class="text-center text-success">30</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong/{$donvi[1]['iMa_donvi']}" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				</tr>
				{/if}
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">8</td>
					<td>Thương mại điện tử</td>
					<td class="text-center text-danger">0</td>
					<td class="text-center text-success">30</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				</tr>
				{/if}
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">9</td>
					<td>Luật kinh tế</td>
					<td class="text-center text-danger">1</td>
					<td class="text-center text-success">29</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				{/if}
				</tr>
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">10</td>
					<td>Luật quốc tế</td>
					<td class="text-center text-danger">2</td>
					<td class="text-center text-success">28</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				</tr>
				{/if}
				{if $session['mapc'] ==0}
				<tr class="gradeA">
					<td class="text-center">11</td>
					<td>Thiết kế công nghiệp</td>
					<td class="text-center text-danger">0</td>
					<td class="text-center text-success">40</td>
					<td class="text-center">30</td>
					<td class="text-center">
						<a href="{base_url()}chitietchamcong" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-eye-open"></i></a>
					</td>
				</tr>
				{/if}
			</tbody>
		</table>
		</div>
	</div>
</div>