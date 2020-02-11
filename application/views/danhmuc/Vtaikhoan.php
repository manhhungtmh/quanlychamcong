

<div class="container fixdisplay" style="min-height: 580px;">
    <div class="panel panel-default ">
        <div class="panel-heading text-left" style="background-color: #2966a3;">
            <h5 style="color: #fff;"><b>Danh mục tài khoản</b></h5>
        </div>
    <form method="post" action="">
        <div class="container-fluid">
            <div class="row form-group">
                <div class="col-md-12 col-sm-12">
                    <br>
                    <!-- Nhóm thông tin chính -->
                    <div class="form-group">  
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Tên tài khoản</label> 
                            <input type="text" name="sTen_TK" class="form-control"
                             value="{if isset($sua)}{$sua.sTen_TK}{/if}"required>
                        </div>              
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Mật khẩu</label> 
                            <input type="password" name="sMatKhau" class="form-control"
                             value="{if isset($sua)}{$sua.sMatKhau}{/if}"required>
                        </div>
                        <div class="form-group col-md-3">
							<label for="">Tên quyền</label>
                            <select style="width: 100%;height: 30px;" name="quyen" value="">
                            	<option value="" selected="" disabled="">---Chọn---</option>
                                {foreach $quyen AS $key=>$val}
                                    <option value="{$val.iMa_Quyen}"{if !empty($sua)&&$sua.iMa_Quyen==$val.iMa_Quyen} selected=""{/if}>{$val.sTen_Quyen}</option>
                                {/foreach}
                            </select>
						</div>
                        <div class="form-group col-md-3">
                            <label for="">Tên cán bộ</label>
                            <select style="width: 100%;height: 30px;" name="canbo" value="">
                                <option value="" selected="" disabled="">---Chọn---</option>
                                {foreach $canbo AS $key=>$val}
                                    <option value="{$val.iMa_canbo}"{if !empty($sua)&&$sua.iMa_canbo==$val.iMa_canbo} selected=""{/if}>{$val.sTen_Canbo}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                    <div style=" text-align: right;">
                        {if isset($sua)}
                        <button class="btn btn-primary" type="submit" name="capnhat" value="{$sua.iMa_TK}">Cập nhật</button>
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
                    
                    <th class="text-center" style="width: 100px;">STT</th>
                    <th class="text-center">Tên tài khoản</th>
                    <th class="text-center">Tên quyền</th>
                    <th class="text-center">Tên cán bộ</th>
                    <th class="text-center"  style="width: 200px;">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                {foreach $taikhoan as $key=>$val}
                <tr>
                    <td class="text-center">{$key+1}</td>
                    <td>{$val.sTen_TK}</td>
                    <td>{$val.sTen_Quyen}</td>
                    <td>{$val.sTen_Canbo}</td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" value="{$val.iMa_TK}" name="edit">Sửa
                            </button>
                            <button class="btn btn-danger" type="submit" value="{$val.iMa_TK}" name="delete" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa
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
