

<div class="container fixdisplay" style="min-height: 580px;">
    <div class="panel panel-default ">
        <div class="panel-heading text-left" style="background-color: #2966a3;">
            <h5 style="color: #fff;"><b>Danh mục cán bộ</b></h5>
        </div>
    <form method="post" action="">
        <div class="container-fluid">
            <div class="row form-group">
                <div class="col-md-12 col-sm-12">
                    <br>
                    <!-- Nhóm thông tin chính -->
                    <div class="form-group">
                        <div class="row">
                            <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Mã đối tượng cũ</label> 
                            <input type="text" name="iMa_DTC" class="form-control"
                             value="{if isset($sua)}{$sua.iMa_DTC}{/if}"required>
                        </div>  
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Mã đối tượng mới</label> 
                            <input type="text" name="iMa_DTM" class="form-control"
                             value="{if isset($sua)}{$sua.iMa_DTM}{/if}"required>
                        </div>              
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Tên cán bộ</label> 
                            <input type="text" name="sTen_Canbo" class="form-control"
                             value="{if isset($sua)}{$sua.sTen_Canbo}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Ngày sinh</label> 
                            <input type="text" name="sNgaySinh" class="form-control"
                             value="{if isset($sua)}{$sua.sNgaySinh}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Giới tính</label> 
                            <input type="text" name="sGioiTinh" class="form-control"
                             value="{if isset($sua)}{$sua.sGioiTinh}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Mã ngạch</label> 
                            <input type="text" name="sMa_ngach" class="form-control"
                             value="{if isset($sua)}{$sua.sMa_ngach}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Chức danh</label> 
                            <input type="text" name="sChucDanh" class="form-control"
                             value="{if isset($sua)}{$sua.sChucDanh}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Ngày về trường</label> 
                            <input type="text" name="sNgayVeTrg" class="form-control"
                             value="{if isset($sua)}{$sua.sNgayVeTrg}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Ngày về trường thức</label> 
                            <input type="text" name="sNgayveTrgThuc" class="form-control"
                             value="{if isset($sua)}{$sua.sNgayveTrgThuc}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Đơn vị</label>
                            <select style="width: 100%;height: 30px;" name="donvi" value="">
                                <option value="" selected="" disabled="">---Chọn---</option>
                                {foreach $donvi AS $key=>$val}
                                    <option value="{$val.iMa_donvi}"{if !empty($sua)&&$sua.iMa_donvi==$val.iMa_donvi} selected=""{/if}>{$val.sTen_donvi}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Chức vụ</label>
                            <select style="width: 100%;height: 30px;" name="chucvu" value="">
                                <option value="" selected="" disabled="">---Chọn---</option>
                                {foreach $chucvu AS $key=>$val}
                                    <option value="{$val.iMa_chucvu}"{if !empty($sua)&&$sua.iMa_chucvu==$val.iMa_chucvu} selected=""{/if}>{$val.sTen_chucvu}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Loại biên chế</label>
                            <select style="width: 100%;height: 30px;" name="loaibienche" value="">
                                <option value="" selected="" disabled="">---Chọn---</option>
                                {foreach $loaibienche AS $key=>$val}
                                    <option value="{$val.iMa_loai}"{if !empty($sua)&&$sua.iMa_loai==$val.iMa_loai} selected=""{/if}>{$val.sTen_loai}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div style=" text-align: right;">
                        {if isset($sua)}
                        <button class="btn btn-primary" type="submit" name="capnhat" value="{$sua.iMa_canbo}">Cập nhật</button>
                        {else}
                        <button class="btn btn-primary" type="submit" name="them" value="+">Thêm</button>
                        {/if}
                    </div>
                </form> 
        <br>
    </div>
<form method="POST" action="" >
     <div class="panel-body">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Mã ĐTC</th>
                    <th class="text-center">Mã ĐTM</th>
                    <th class="text-center">Họ tên</th>
                    <th class="text-center">Ngày sinh</th>
                    <th class="text-center">Giới tính</th>
                    <th class="text-center">Mã ngạch</th>
                    <th class="text-center">Chức danh</th>
                    <th class="text-center">Ngày về trường</th>
                    <th class="text-center">Ngày về trường thức</th>
                    <th class="text-center">Đơn vị</th>
                    <th class="text-center">Chức vụ</th>
                    <th class="text-center">Loại biên chế</th>
                    <th  class="text-center" style="width: 120px;">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                {foreach $canbo as $key=>$val}
                <tr>
                    <td class="text-center">{$key+1}</td>
                    <td>{$val.iMa_DTC}</td>
                    <td>{$val.iMa_DTM}</td>
                    <td>{$val.sTen_Canbo}</td>
                    <td>{$val.sNgaySinh}</td>
                    <td>{$val.sGioiTinh}</td>
                    <td>{$val.sMa_ngach}</td>
                    <td>{$val.sChucDanh}</td>
                    <td>{$val.sNgayVeTrg}</td>
                    <td>{$val.sNgayveTrgThuc}</td>
                    <td>{$val.sTen_donvi}</td>
                    <td>{$val.sTen_chucvu}</td>
                    <td>{$val.sTen_loai}</td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" value="{$val.iMa_canbo}" name="edit">Sửa
                            </button>
                            <button class="btn btn-danger" type="submit" value="{$val.iMa_canbo}" name="delete" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa
                            </button>
                        </div>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        </div>
</form>
</div>
</div>
</div>
</div>
