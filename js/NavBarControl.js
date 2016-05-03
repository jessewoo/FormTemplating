//Purpose: Removes the .open (via Bootstrap JS onclick event) from dropdown menu when hover changes

//Start watching for click events as soon as the page is done loading
$(document).ready(function()
{
	$('.dropdown').mouseenter(function(event){
		$(this).addClass("open");
	});
	$('.dropdown').mouseleave(function(event){
		$('.dropdown').removeClass("open");
	});		
});