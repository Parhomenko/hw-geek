$(document).ready(function(){

	$("body").append(
		"<div class='popup'><span class='left'></span><img src='' alt='' class='picture'/><span class='right'></span></div>");

	$(".popular_sections li a").click(function(e){
		e.preventDefault();
		$(".popup").show(800);
		$(".picture").attr("src", $(this).find('img').attr('src'));
		$(this).find("img").addClass("active");
	});

	$(".right").click(function(){

		var mysrc=$(".popular_sections li a .active").parent().parent().next().find('img').attr("src");
		$(".popup img").attr("src", mysrc);
	});
	
	$(".left").click(function(){

		var mysrc=$(".popular_sections li a .active").parent().parent().prev().find('img').attr("src");
		$(".popup img").attr("src", mysrc);
	});

	$(".popup img").click(function(){
		$(".popup").hide(800);
	})
});