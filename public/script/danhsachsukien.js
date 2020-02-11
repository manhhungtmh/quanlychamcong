    $(document).ready(function(){
        $('#example').DataTable();

        $(".show-modal").click(function(){
            var self = $(this);
            var masukien = self.attr("data-masukien")
            console.log(masukien);
            $.ajax({
                url: location.pathname,
                type: "post",
                dataType: "html",
                data: {
                    action: "chitietsukien",
                    masukien: masukien,
                }
            }).done(function(res){
                console.log(res);
                res = JSON.parse(res);
                var tensukien = self.parent().parent().find("td").eq(1).text();

                $(".modal-title").text(tensukien);
                let html = '';
                res.forEach((val,ind) =>{
                    html += `<tr>
                                <td scope="row" class="text-center">${++ind}</td>
                                <td>${val.sTen_donvi}</td>
                                <td class="text-center">${val.songuoiduocphepthamgia}</td>
                                <td class="text-center">${val.songuoithamgia}</td>
                                <td class="text-center">${val.songuoikhongthamgia}</td>
                            </tr>`;
                });

                $("#table-body-chitietsukien").html(html);
            });

            $("#myModal").modal({
                backdrop: 'static',
                keyboard: false
            });
        });

        // Xoa su kien
        $(".removeEvent").click(function(e){
            if(confirm("Bạn có muốn xoá sự kiện này không")){
                var masukien = $(this).attr("data-masukien");
                $.ajax({
                    url: window.location.pathname,
                    type: 'post',
                    data: {
                    'action': 'xoasukien',
                    'masukien': masukien,
                    }
                }).done(function(res){
                    location.reload();
                });
            }
        });
        
    });
