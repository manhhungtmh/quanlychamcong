        $(document).ready(function(e){
            $("#taosukien").on("click", e=>{
                let sukien = {};
                sukien.sTen_Sukien   = $("#tensukien").val();
                sukien.sTG_BatDau    = $("input[name='tgbatdau']").val();
                sukien.sTG_KetThuc   = $("input[name='tgketthuc']").val();

                if(sukien.sTen_Sukien.length == 0){
                    showToast("warning","Tên sự kiện không được để trống");
                    return false;
                }
                var dsthamgia   = $("#tblToLeft input[type='checkbox']");
                if(dsthamgia.length == 0){
                    showToast("warning","Bạn chưa thêm người vào sự kiện");
                    return false;
                }
                //console.log(dsthamgia);
                let arrMaCB = [];
                for(let i=0; i<dsthamgia.length; ++i){
                    arrMaCB.push(dsthamgia.eq(i).val());
                }
                $.ajax({
                    url: window.location.pathname,
                    type: 'post',
                    data: {
                    'action': 'taosukien',
                    'sukien' : sukien,
                    'dsthamgia' : arrMaCB,
                    }
                }).done(function(masukien){
                    masukien = masukien.trim();
                    console.log(masukien);
                    var html = '';

                    html += `<button class="btn btn-primary" value="${masukien}" id="suasukien"><i class="fa fa-calendar"></i> Lưu</button>
                             <a href="danhsachsukien" class="btn btn-success">Danh sách sự kiện</a>`;
                    $("#submit").html(html);
                    history.pushState(null, null, "http://localhost/quanlychamcong/taosukien?masukien="+masukien);

                    showToast("success","Tạo sự kiện thành công");
                });
            });

            $("#submit").on("click", "#suasukien", function(e){
                var masukien = $(this).val();
                let sukien = {};
                sukien.sTen_Sukien   = $("#tensukien").val();
                sukien.sTG_BatDau    = $("input[name='tgbatdau']").val();
                sukien.sTG_KetThuc   = $("input[name='tgketthuc']").val();

                if(sukien.sTen_Sukien.length == 0){
                    showToast("warning","Tên sự kiện không được để trống");
                    return false;
                }
                var dsthamgia   = $("#tblToLeft input[type='checkbox']");
                if(dsthamgia.length == 0){
                    showToast("warning","Bạn chưa thêm người vào sự kiện");
                    return false;
                }
                //console.log(dsthamgia);
                let arrMaCB = [];
                for(let i=0; i<dsthamgia.length; ++i){
                    arrMaCB.push(dsthamgia.eq(i).val());
                }
                $.ajax({
                    url: window.location.pathname,
                    type: 'post',
                    data: {
                    'action': 'suasukien',
                    'sukien' : sukien,
                    'dsthamgia' : arrMaCB,
                    'mask'      : masukien,
                    }
                }).done(function(res){
                    showToast("warning","Sửa sự kiện thành công");
                    $('#tblToRight').empty();
                });
            });

            $("#donvi").on('change', function(e) {
                let value = $(this).val();
                $.ajax({
                    url: window.location.pathname,
                    type: 'post',
                    data: {
                    'action': 'getCanbo',
                    'ma_donvi': value,
                    }
                }).done(function(res){
                    res = JSON.parse(res);
                    console.log(res);
                    html = '';
                                                         
                    res.forEach((val,ind) => {
                        html += `<tr>
                            <td>
                            <div class="pure-radiobutton text-center">
                                <input id="${ind}" type="checkbox" class="radio" name="a" value="${val.iMa_canbo}"><label for="${ind}">&nbsp;</label>
                            </div>
                            </td>
                            <td>${val.sTen_Canbo}</td>
                            <td>${val.sGioiTinh}</td>
                            <td>${val.sNgaySinh}</td>
                        </tr>`;
                    });
                    $('#tblToRight').html(html);
                });
            });

            $("table").on("click", "tr", function(e){
                //e.preventDefault();
                var input = $(this).children().find("input");
                var trangthai = input.prop("checked");
                input.prop("checked",!trangthai);

                var id = input.attr("id");
                if(id == "checkAllLeft"){
                    $("#tblToRight input[type='checkbox']").prop("checked",!trangthai);
                }else if(id == "checkAllRight"){
                    $("#tblToLeft input[type='checkbox']").prop("checked",!trangthai);
                }else{
                    if(trangthai){
                        $(this).parent().parent().find("input:first").prop("checked", !trangthai);
                    }
                }
            })

            $("#btnToRight").on("click", function(e){
                var el = $("#tblToRight input[type='checkbox']:checked");
                for(let i=0; i<el.length; ++i){
                    let a = el.eq(i);
                    a.prop("checked",false);
                    a = a.parent().parent().parent().remove();  
                    /*$("#tblToLeft").empty();*/
                    $("#tblToLeft").append(a);

                    // kiem tra bang ben trai co het data khong
                    $("#checkAllLeft").prop("checked", false);
                }
            });

            $("#btnToLeft").on("click", function(){
                var el = $("#tblToLeft input[type='checkbox']:checked");
                for(let i=0; i<el.length; ++i){
                    let a = el.eq(i);
                    a.prop("checked",false);
                    a = a.parent().parent().parent().remove();
                    /*$("#tblToRight").empty();*/
                    $("#tblToRight").append(a);


                    $("#checkAllRight").prop("checked", false);
                }
            });

            $("#tblToLeft input[type='checkbox']").on("change", function(){
                $("#checkAllRight").prop("checked", false);
            });

            $("#tblToRight input[type='checkbox']").on("change", function(){
                $("#checkAllLeft").prop("checked", false);
            });

        });
