$(document).ready(function(){
	//main scripts
	$(".enter_menu img").click(function(){
        var state = $(this).data('toggleState');
        if(state){

            $('.header').removeClass('bg_header');
            $('.header').addClass('bg_header_closer');
            $('.header nav, .header .tools').animate({
            		//marginTop:0,
            		opacity:0
            },500);
            $('.header').animate({
                height:'120px'
            },1200);                   
            $('.slider_head').animate({
                 marginTop:'-120px'
            },1200);

        } else {

            $('.header').removeClass('bg_header_closer');
            $('.header').addClass('bg_header');
            $('.header').animate({
                height:'295px'
            },1200);
            $('.slider_head').animate({
                marginTop:0
            },1200,function(){
                $('.header nav, .header .tools').animate({
                    marginTop:30,
                    opacity:1
                },500);
            });

        }
        $(this).data('toggleState', !state);
    });
});