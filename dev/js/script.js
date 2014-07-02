jQuery(document).ready(function($){
	//main scripts
        //OPEN AND CLOSE HEADER
	$(".enter_menu svg").click(function(){
        var state = $(this).data('toggleState');
        if(state){

            $('.header').removeClass('bg_header').addClass('bg_header_closer');
            $('#tools_open, #menu_open').animate({
            		marginTop:0,
            		opacity:0
            },500);
            $('.header').animate({
                height:'120px'
            },1200);                   
            $('.slider_head').animate({
                 marginTop:'-120px'
            },1200);

        } else {

            $('.header').removeClass('bg_header_closer').addClass('bg_header');
            
            $('.header').animate({
                height:'295px'
            },1200);

            $('.slider_head').animate({
                marginTop:0
            },1200);

             $('#tools_open, #menu_open').animate({
                marginTop:30,
                opacity:1
            },500);

        }
        $(this).data('toggleState', !state);
    });

        //OPEN AND CLOSE ADS
    /*$(window).load(function(){
        $('.cont_ad_middle').delay(3000).slideUp(function(){
            $('.open_close_ad .close').hide(function(){
                $('.open_close_ad i.fa').removeClass('fa-times');
                $('.open_close_ad .open').show(function(){
                    $('.open_close_ad i.fa').addClass('fa-chevron-down');
                });
            });
        });
    });*/
    $('.open_close_ad').click(function(){
        var state = $(this).data('ads_box');
        if(state){

            $('.cont_ad_middle').slideDown(function(){
                $('.open_close_ad .open').hide(function(){
                    $('.open_close_ad i.fa').removeClass('fa-chevron-down');
                    $('.open_close_ad .close').show(function(){
                        $('.open_close_ad i.fa').addClass('fa-times');
                    });
                });
            });

        } else {

            $('.cont_ad_middle').slideUp(function(){
                $('.open_close_ad .close').hide(function(){
                    $('.open_close_ad i.fa').removeClass('fa-times');
                    $('.open_close_ad .open').show(function(){
                        $('.open_close_ad i.fa').addClass('fa-chevron-down');
                    });
                });
            });
            
        }
        $(this).data('ads_box', !state);
    });

});