$(document).ready(function(){


	$(".open-contrato").click(function(){
		$(".wrap-modal").fadeIn();
		return false;
	});

	$(".close-modal, .overlay-modal").click(function(){
		$(".wrap-modal").fadeOut();
		return false;
	});

	
	$(".link-anchor").click(function(){
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
    	return false;
	});

	$('.tel').mask('(00) 90000-0000');
	$('.time').mask('00:00');
	$('.total').mask('*0,00');

	
	

    //SEND FORM PRESENTIAL
	$(".form-presential").submit(function(){
		var form = $(this);
    	var thisForm = $(this).serialize();

		var g = "inc/send-presential.php";

			$.post(g , thisForm, function(data){
				$(".product-presential-feedback", form).html(data);
			});
			return false;
	});

	$(".form-product-online").submit(function(){
		var form = $(this);
    	var thisForm = $(this).serialize();

		var g = "inc/send-online.php";

			$.post(g , thisForm, function(data){
				$(".product-online-feedback", form).html(data);
			});
			return false;
	});
	

	
		
});