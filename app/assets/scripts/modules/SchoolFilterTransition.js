jQuery(function($){
	// 1. All checked
	$("input[value='ALL']").click(function() {
		$('#SCHOOLS').addClass("all-items").removeClass("adult-items junior-items thirty-items").fadeOut(0).fadeIn(600);
	});
	// 2. Adult checked
	$("input[value='ADULT']").click(function() {
		$('#SCHOOLS').addClass("adult-items").removeClass("all-items junior-items thirty-items").fadeOut(0).fadeIn(600);
	});
	// 3. Junior checked
	$("input[value='JUNIOR']").click(function() {
		$('#SCHOOLS').addClass("junior-items").removeClass("all-items adult-items thirty-items").fadeOut(0).fadeIn(600);
	});
	// 4. 30+ checked
	$("input[value='THIRTY']").click(function() {
		$('#SCHOOLS').addClass("thirty-items").removeClass("all-items adult-items junior-items").fadeOut(0).fadeIn(600);
	});
})