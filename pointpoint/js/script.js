$(function(){
	
	var pp = $('#productButton').pointPoint();
	
	// To destroy it, call the destroy method:
	// pp.destroyPointPoint(); 	

	$('body').click(function(){
    pp.destroyPointPoint();
});
	
});