function load() {
	$(".text").animate({ opacity: '1' }, "400");
}
$(document).ready(function() {
	$('li').click(function(){
		$(".text").animate({opacity: '0'}, "200");
		$(".text").animate({opacity: '1'}, "200");
	});
});