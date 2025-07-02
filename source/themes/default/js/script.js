$(function () {
	var form_notice = $(".form-notice");
	
	if(form_notice.is(':empty')){
		form_notice.hide();
	}else{
		form_notice.show();
	}
	
	$("#name").focus();
	
});