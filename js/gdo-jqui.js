"use strict";
$(function(){
	$('.gdt-button').button();
	$('.ui-widget select').selectmenu();
	$.datepicker.setDefaults({
		showOn: "both"
//		buttonImageOnly: true,
//		buttonImage: "calendar.gif",
//		buttonText: "Calendar"
	});
	$.datepicker.setDefaults($.datepicker.regional[window.GDO_LANGUAGE]);
	$('.gdt-date input').datepicker();
});
