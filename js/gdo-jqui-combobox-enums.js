"use strict";

$(function(){
	$('.gdo-autocomplete-enum').each(function(){
		var $this = $(this);
		console.log(this);
		$this.combobox();
	});
	
});
