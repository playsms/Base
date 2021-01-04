$(document).ready(function() {
	$(".button").addClass("btn btn-outline-dark");
	
	$(".playsms-navbar").addClass("navbar-dark bg-primary");

	$(".playsms-table-list").addClass("table-sm table-striped table-hover table-condensed");
	$(".playsms-table-list").tablesorter();
		
	$(".playsms-table").addClass("table-sm table-hover table-condensed");
	
	$(".playsms-tooltip").tooltip();
	
	$(".playsms-mandatory").tooltip();
	
	$('.pull-left').addClass('float-left');
	$('.pull-right').addClass('float-right');

	$(".form-control").addClass("playsms-input-sizer");
	
	$("input[type='text']").addClass("form-control playsms-input-sizer");
	$("input[type='password']").addClass("form-control playsms-input-sizer");
	$("input[type='file']").addClass("form-control playsms-input-sizer");
	$("input[type='hidden']").addClass("playsms-input-sizer");
	
	$("input[type='text']").css("display", "inline");
	$("input[type='password']").css("display", "inline");
	$("input[type='file']").css("display", "inline");
	$("input[type='hidden']").css("display", "inline");

	$("textarea").addClass("form-control playsms-input-sizer");
	
	$("select").addClass("form-control playsms-input-sizer");
	
	var page_header_title = $(".page-header-title").text();
	$(".this-page-header-title").text(page_header_title);
	$(".page-header-title").remove();

	var page_header_subtitle = $(".page-header-subtitle").text();
	$(".this-page-header-subtitle").text(page_header_subtitle);
	$(".page-header-subtitle").remove();
});
