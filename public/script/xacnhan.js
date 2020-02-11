$(document).ready(function(){
	$("#btn_xacnhan").on("click", function(){
		var data = [];
		var radio = $("input[type='radio']:checked");
		for(let i=0; i<radio.length; ++i){
			let macb = radio.eq(i).attr("name");
			let trangthai = radio.eq(i).val();
			
			data.push({iMa_canbo: macb, sTrangThai: trangthai});
		}

			$.ajax({
                url: location.pathname,
                type: "post",
                dataType: "html",
                data: {
                    action: "xacnhan",
                    data: data,
                }
            }).done(function(res){
                showToast("success", "Xác nhận thành công");
            });
	});
});