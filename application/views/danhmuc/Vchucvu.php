

<div class="container fixdisplay" style="min-height: 580px;">
    <div class="panel panel-default ">
        <div class="panel-heading text-left" style="background-color: #2966a3;">
            <h5 style="color: #fff;"><b>Danh mục chức vụ</b></h5>
        </div>
    <form method="post" action="">
        <div class="container-fluid">
            <div class="row form-group">
                <div class="col-md-12 col-sm-12">
                    <br>
                    <!-- Nhóm thông tin chính -->
                    <div class="form-group">  
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Tên chức vụ</label> 
                            <input type="text" name="sTen_chucvu" class="form-control"
                             value="{if isset($sua)}{$sua.sTen_chucvu}{/if}"required>
                        </div>              
                        <div class="form-group col-md-3">
                            <label for="exampleInputEmail1">Tên chức vụ viết tắt</label> 
                            <input type="text" name="sTen_chucvu_vt" class="form-control"
                             value="{if isset($sua)}{$sua.sTen_chucvu_vt}{/if}"required>
                        </div>
                    </div>
                    <div style=" text-align: right;">
                        {if isset($sua)}
                        <button class="btn btn-primary" type="submit" name="capnhat" value="{$sua.iMa_chucvu}">Cập nhật</button>
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
                    
                    <th class="text-center"style="width: 100px;">STT</th>
                    <th class="text-center">Tên chức vụ</th>
                    <th class="text-center" >Tên chức vụ viết tắt</th>
                    <th class="text-center" style="width: 200px;">Tác vụ</th>
                </tr>
            </thead>
            <tbody>
                {foreach $ds as $key=>$val}
                <tr>
                    <td  class="text-center">{$key+1}</td>
                    <td>{$val.sTen_chucvu}</td>
                    <td>{$val.sTen_chucvu_vt}</td>
                    <td>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit" value="{$val.iMa_chucvu}" name="edit">Sửa
                            </button>
                            <button class="btn btn-danger" type="submit" value="{$val.iMa_chucvu}" name="delete" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa
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
