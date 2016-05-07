$(document).ready(function() {
	
	$(".modal").click(function() {
		$(this).fadeOut("normal");
		$(".modal-del").fadeOut("normal");
		$(".modal-login").fadeOut("normal");
		$(".modal-pass").fadeOut("normal");
	});

	$(".delete").click(function(){
		var del = $(this).attr('href');
		$('.modal').fadeIn(0.5 ,function(){
			$('.modal-del').fadeIn("normal");
			$('.sim').attr('href', del);
		});
		return false;
	});
	
	$(".login").click(function(){
		var del = $(this).attr('href');
		$('.modal').fadeIn(0.5 ,function(){
			$('.modal-login').fadeIn("normal");
			$('.sim').attr('href', del);
		});
		return false;
	});

	$(".change-pass").click(function(){
		var del = $(this).attr('href');
		$('.modal').fadeIn(0.5 ,function(){
			$('.modal-pass').fadeIn("normal");
			$('.sim').attr('href', del);
		});
		return false;
	});
});