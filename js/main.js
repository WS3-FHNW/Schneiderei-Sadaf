$(document).ready(function(){
	
	var menuToggled = false;
	
	$("#menu-btn").click(function(){
		
		if(menuToggled){
			$(".mover").animate({left: 0});
		}else{
			$(".mover").animate({left: "-30%"});
		}
		menuToggled = !menuToggled;
		
	});
	
});