<script type="text/javascript" src="./public/script/xacnhan.js"></script>       
<div class="col-md-12" style="min-height: 580px;">
    <div class="content-box-large">
        <div class="panel-title text-center"><h3>Danh sách sự kiện</h3></div>
        <div class="panel-heading">
        </div>
        <div class="panel-body">
            <div class="container-fluid">  
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">STT</th>
                            <th class="text-center" width="16%">Họ tên</th>
                            <th class="text-center" width="10%">Ngày sinh</th>
                            <th class="text-center" width="6%">Giới tính</th>
                            <th class="text-center" width="8%">Chờ xác nhận</th>
                            <th class="text-center" width="8%">Tham gia</th>
                            <th class="text-center" width="12%">Không tham gia</th>
                            <th class="text-center" width="25%">Lý do</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            {if !empty($dscanbo)}
                                {foreach $dscanbo as $k => $v}
                                <tr>
                                    <td class="text-center">{$k+1}</td>
                                    <td>{$v.sTen_Canbo}</td>
                                    <td class="text-center">{$v.sNgaySinh}</td>
                                    <td class="text-center">{$v.sGioiTinh}</td>
                                    <td class="text-center">   
                                            <div class="pure-radiobutton">
                                                <input id="cho{$k}" type="radio" class="radio" name="{$v.iMa_canbo}" value="Chờ xác nhận" {if $v.sTrangThai == "Chờ xác nhận"}checked{/if}> <label for="cho{$k}"></label>
                                            </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="pure-radiobutton">
                                            <input id="thamgia{$k}" type="radio" class="radio" name="{$v.iMa_canbo}" value="Tham gia" {if $v.sTrangThai == "Tham gia"}checked{/if}> <label for="thamgia{$k}"></label>
                                        </div>
                                    </td>    
                                    <td class="text-center">
                                        <div class="pure-radiobutton">
                                            <input id="khongthamgia{$k}" type="radio" class="radio" name="{$v.iMa_canbo}" value="Không tham gia" {if $v.sTrangThai == "Không tham gia"}checked{/if}> <label for="khongthamgia{$k}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <input type="text" name="" class="form-control">
                                    </td>
                                </tr>
                                {/foreach}
                            {else}
                            <tr>
                                <td colspan="8" class="text-center">Không có cán bộ nào thuộc khoa của bạn được tham gia sự kiện này</td>
                            </tr>
                            {/if}
                    
                    </tbody>
                </table>
                <div class="text-center">
                    <button class="btn btn-sm btn-success" id="btn_xacnhan">Xác nhận</button>
                    <a href="{$url}danhsachsukien" class="btn btn-sm btn-primary">Danh sách sự kiện</a>
                </div>
            </div>
       </div>
      </div>