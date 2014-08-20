//validacion formulario de busqueda
function LimpiaEspacios(Obj){
  var texto = Obj.value;
  //limpiamos de espacios en blanco el texto
  var texto_limpio = texto.replace(/^\s+|\s+$/g,"");
  if (texto_limpio===""){
  Obj.value = "";
  Obj.focus();
  return true;
}
  else
  {
  return false;
  }
}

function valida_form(){
  if (LimpiaEspacios(document.frm.s)){
    jQuery('#search_input').css('border','#2A378F solid 1px').attr("placeholder", "Busca algo en nuestro blog");
  return false;
  }
  return true;
}
jQuery(document).ready(function($){
	//main scripts

   $(window).load(function(){
      $('.linea_01').addClass('linea_01_crux');  
      $('.linea_03').addClass('linea_03_crux'); 
      $('.linea_02').fadeOut(); 

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
    });
        //OPEN AND CLOSE HEADER
	$("#icon_menu").click(function(){
        var state = $(this).data('toggleState');
        if(state){

            $('.linea_01').removeClass('linea_01_crux_b').addClass('linea_01_crux');  
            $('.linea_03').removeClass('linea_03_crux_b').addClass('linea_03_crux'); 
            $('.linea_02').fadeOut();

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
            

        } else {

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

            $('.linea_01').addClass('linea_01_crux_b').removeClass('linea_01_crux');  
            $('.linea_03').addClass('linea_03_crux_b').removeClass('linea_03_crux');
            $('.linea_02').fadeIn(3000);
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


    //addthis counter
    addthis.counter(".atcounter");
});