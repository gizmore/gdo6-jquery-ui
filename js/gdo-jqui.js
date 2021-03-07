"use strict";
$(function(){
	$('.gdt-button, .gdo-button a').button();
	$('.ui-widget select').selectmenu();
	$.datepicker.setDefaults({
		showOn: "both"
//		buttonImageOnly: true,
//		buttonImage: "calendar.gif",
//		buttonText: "Calendar"
	});
	$.datepicker.setDefaults($.datepicker.regional[window.GWF_LANGUAGE]);
	$('.gdt-date input').datepicker();
});
