<script type="text/javascript" src="./public/script/danhsachsukien.js"></script>
<style type="text/css">
    .badge {
        border-radius: 4px;
    }
    .badge-warning {
        color: #000;
        background-color: #ffc107;
    }
    .badge-warning:hover {
      background-color: #c67605;
    }
    .badge-success {
        color: #fff;
        background-color: #28a745;
    }
    .badge-success:hover {
        background-color: #356635;
    }
    td{
        vertical-align: middle !important;
    }
</style>
<div class="col-md-12" style="min-height: 580px;">
    <div class="content-box-large">
        <div class="panel-title text-center"><h3>Danh sách sự kiện</h3></div>
        <div class="panel-heading">
    	</div>
        <div class="panel-body">
            <div class="container-fluid">         
                <table class="table table-bordered table-striped table-hover" id="example">
                    <thead>
                        <tr>
                            <th class="text-center" width="3%">STT</th>
                            <th class="text-center" width="18%%">Tên sự kiện</th>
                            <th class="text-center" width="10%">Ngày bắt đầu</th>
                            <th class="text-center" width="10%">Ngày kết thúc</th>
                            <th class="text-center" width="10%">Trạng thái</th>
                            <th class="text-center" width="14%">Tổng số người<br>được phép tham gia</th>
                            <th class="text-center" width="13%">Số người<br>xác nhận tham gia</th>
                            <th class="text-center" width="11%">Số người<br>không tham gia</th>
                            <th class="text-center" width="11%">Tác vụ</th>
                        </tr>
                    </thead>
                    <tbody>
                        {if (!empty($dssukien))}
                        {foreach $dssukien as $k => $v}
                        <tr >
                            <td class="text-center">{$k+1}</td>
                            <td>{$v.sTen_Sukien}</td>
                            <td class="text-center">{$v.sTG_BatDau}</td>
                            <td class="text-center">{$v.sTG_KetThuc}</td>
                            <td><span class="badge {if ($v.trangthai == "Sắp diễn ra")}badge-light{elseif ($v.trangthai == "Đang diễn ra")}badge-success{else}badge-warning{/if}">{$v.trangthai}</span></td>
                            <td class="text-center">{$v.so_nguoi_duoc_phep_tham_gia}</td>
                            <td class="text-center">{$v.so_nguoi_tham_gia}</td>
                            <td class="text-center">{$v.so_nguoi_khong_tham_gia}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary show-modal" title="Xem chi tiết sự kiện" data-masukien="{$v.iMa_SuKien}"><i class="fas fa-eye"></i></button>
                                {if ($session['maquyen'] == 1)}
                                <a href="{$url}taosukien?masukien={$v.iMa_SuKien}" class="btn btn-success btn-sm" title="Sửa"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-sm btn-danger removeEvent" data-masukien="{$v.iMa_SuKien}" title="Xóa" ><i class="fas fa-trash-alt"></i></button>
                                {elseif ($session['maquyen'] == 2)}
									<a href="{$url}xacnhan?masukien={$v.iMa_SuKien}" class="btn btn-success btn-sm" title="Xác nhận người tham gia"><i class="fas fa-user-check"></i></a>
                               {/if}
                            </td>
                        </tr>
                        {/foreach}
                        {else}
                        <tr>
                            <td colspan="9" class="text-center">Chưa có dữ liệu</td>
                        </tr>
                        {/if}
                    </tbody>
                </table>

                <!-- Modal them su kien -->
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center" width="5%">STT</th>
                                            <th class="text-center"width="30%">Đơn vị tham gia</th>
                                            <th class="text-center"width="22%">Số người<br>được phép tham gia</th>
                                            <th class="text-center"width="22%">Số người<br>xác nhận tham gia</th>
                                            <th class="text-center"width="23%">Số người<br>không tham gia</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body-chitietsukien">
                                        {if !empty($dsdonvi)}
                                        {pr($dsdonvi)}
                                            {foreach $dsdonvi as $k => $val}
                                            <tr>
                                                <td scope="row" class="text-center">{$k}</td>
                                                <td>{$val.sTen_donvi}</td>
                                                <td class="text-center">{$val.songuoiduocphepthamgia}</td>
                                                <td class="text-center">{$val.songuoithamgia}</td>
                                                <td class="text-center">{$val.songuoikhongthamgia}</td>
                                            </tr>
                                            {/foreach}
                                        {/if}
                                    </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success">Xem chi tiết</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
       </div>
      </div>