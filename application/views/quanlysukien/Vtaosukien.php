<script type="text/javascript" src="./public/script/taosukien.js"></script>

<div class="col-md-12" style="min-height: 580px;">
    <div class="content-box-large">
        <div class="panel-title text-center">
            {if !empty($sukien)}<h3>Sửa sự kiện</h3>{else}<h3>Tạo sự kiện</h3>{/if}
        </div>
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label>Tên sự kiện</label>
                        <input type="text" class="form-control pull-right" id="tensukien" value="{if !empty($sukien.thongtin)}{$sukien.thongtin.sTen_Sukien}{/if}">
                    </div>

                    <div class="col-md-5 form-group">
                        <label>Đơn vị</label>
                        <select class="form-control select2" style="width: 100%;" id="donvi">
                            <option selected="selected" disabled>-- Chọn đơn vị --</option>
                            {if !empty($donvi)} {foreach $donvi as $val}
                            <option value="{$val.iMa_donvi}">{$val.sTen_donvi}</option>
                            {/foreach} {/if}
                        </select>
                    </div>

                    <div class="col-md-offset-2 col-md-5 form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Thời gian bắt đầu</label>
                                <input type="text" name="tgbatdau" class="form-control pull-right datepicker" value="{if !empty($sukien.thongtin)}{$sukien.thongtin.sTG_BatDau}{/if}" autocomplete="off">
                            </div>
                            <div class="col-md-6">
                                <label>Thời gian kết thúc</label>
                                <input type="text" name="tgketthuc" class="form-control pull-right datepicker" value="{if !empty($sukien.thongtin)}{$sukien.thongtin.sTG_KetThuc}{/if}" autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div style="border: 1px solid #d2d6de;">
                            <div>
                                <div style="padding:10px; border-bottom: 1px solid #d2d6de; font-weight: bold">Danh sách cán bộ thuộc đơn vị</div>
                            </div>
                            <div class="card-body" style="padding:10px;">
                                <div class="form-group">
                                    <input class="form-control mb-2 input-credit-card" type="text" placeholder="Tìm kiếm...">
                                </div>
                                <div style="max-height: 500px; overflow: auto">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th width="10%">
                                                    <div class="pure-radiobutton text-center">
                                                        <input id="checkAllLeft" type="checkbox" class="radio" name="a" value="">
                                                        <label for="checkAllLeft">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Họ tên</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblToRight">
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <br>
                        <br>
                        <br>
                        <br>
                        <button class="btn btn-icon btn-primary mr-2" type="button" id="btnToRight">
                            <i class="fas fa-arrow-right"></i>
                        </button>
                        <br>
                        <button class="btn btn-icon btn-danger mr-2" type="button" style="margin-top:5px;" id="btnToLeft">
                            <i class="fas fa-arrow-left"></i>
                        </button>
                    </div>
                    <div class="col-md-5" id="viewPerson">
                        <div class="card mb-grid" style="border: 1px solid #d2d6de;">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <div class="card-header-title" style="padding:10px; border-bottom: 1px solid #d2d6de; font-weight: bold">Danh sách cán bộ tham gia sự kiện</div>
                            </div>
                            <div class="card-body" style="padding:10px;">
                                <div class="form-group">
                                    <input class="form-control mb-2" type="text" placeholder="Tìm kiếm...">
                                </div>
                                <div style="max-height: 500px; overflow: auto">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th width="10%">
                                                    <div class="pure-radiobutton text-center">
                                                        <input id="checkAllRight" type="checkbox" class="radio" name="a" value="">
                                                        <label for="checkAllRight">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th>Họ tên</th>
                                                <th>Giới tính</th>
                                                <th>Ngày sinh</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tblToLeft">
                                            {if !empty($sukien.dscanbo)} {foreach $sukien.dscanbo as $ind => $val}
                                            <tr>
                                                <td>
                                                    <div class="pure-radiobutton text-center">
                                                        <input id="{$ind}" type="checkbox" class="radio" name="a" value="{$val.iMa_canbo}">
                                                        <label for="{$ind}">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{$val.sTen_Canbo}</td>
                                                <td>{$val.sGioiTinh}</td>
                                                <td>{$val.sNgaySinh}</td>
                                            </tr>
                                            {/foreach} {/if}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <br>
            <div class="form-group text-center" id="submit">
                {if !empty($sukien)}
                <button type="button" class="btn btn-primary" name="submit" value="{$masukien}" id="suasukien">
                    <i class="fa fa-calendar"></i> Sửa sự kiện
                </button>
                <a href="danhsachsukien" class="btn btn-success" name="submit" value="submit">
                      Danh sách sự kiện
                    </a> {else}
                <button type="button" class="btn btn-primary" name="submit" value="submit" id="taosukien">
                    <i class="fa fa-calendar"></i> Tạo sự kiện
                </button>
                <!--                     <button type="button" class="btn btn-success" name="submit" value="submit">
                        <i class="fa fa-calendar"></i> Tạo và sang danh sách sự kiện
                    </button> -->
                {/if}

            </div>
        </div>
    </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <center>
                    <h4 class="modal-title" id="exampleModalLongTitle">Thông tin chi tiết</h4></center>
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