
$(()=>{

	$(".img-more img").on("mouseenter",function(e){
		let src = $(this).attr("src");
		$(".img-main img").attr("src",src);
	})

});