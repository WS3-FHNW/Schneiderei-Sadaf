$(document).ready(function(){

	setTimeout(function(){
		$(".si-inner").addClass("si-inner-scaled");
	}, 300);





	var menuToggled = false;
	
	$("#menu-btn").click(function(){

		if($(window).width() >= 1000){

            $(".mover").toggleClass("mover-left");
            $(".menu").toggleClass("menu-left");
            $(".side-image").toggleClass("mover-left");

        }else{
                $(".menu").toggleClass("menu-top");

		}

		
	});
	
});