$(document).ready(function(){

	 // $("#site-navigation ul li:nth-child(2)").mouseenter(function(){
  //       $("ul.sub-menu").css("display", "block");
  //   });

	 // $("ul.sub-menu").mouseleave(function(){
  //       $("ul.sub-menu").css("display", "none");
  //   });

	 // $('#site-navigation ul li:nth-child(2)').off('mouseenter');

	 if ($(window).width() <= 700) {
   $('#site-navigation ul li:nth-child(2)').off('mouseenter');
	}
	else {
   $("#site-navigation ul li:nth-child(2)").mouseenter(function(){
        $("ul.sub-menu").css("display", "block");
    });

	 $("ul.sub-menu").mouseleave(function(){
        $("ul.sub-menu").css("display", "none");
    });
}

});

$(window).on('resize', function(){
	if ($(window).width() <= 700) {
   $('#site-navigation ul li:nth-child(2)').off('mouseenter');
	}
	else {
   $("#site-navigation ul li:nth-child(2)").mouseenter(function(){
        $("ul.sub-menu").css("display", "block");
    });

	 $("ul.sub-menu").mouseleave(function(){
        $("ul.sub-menu").css("display", "none");
    });
}
});