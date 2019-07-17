/* ham dung cho desktop
function setHeightScreen(){
    var scre = $(window).height();
    var bd = $('body').height();
    console.log(scre);
    console.log(bd);
}*/

// $(function () {
//     'use strict';
// });
// $('#w1').select2({
//      minimumResultsForSearch: -1,

// });

// $('#w2').select2({
//      minimumResultsForSearch: -1,
// });
// $('#w3').select2({
//      minimumResultsForSearch: -1,
// });
$('b[role="presentation"]').hide();
$('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
$('#container-id').owlCarousel({
        loop:true,
        dots:false,
        navigation : false,
        items:20,
        margin:0,
        nav:false,
        autoplay:false,

    });
$('#container-id-2').owlCarousel({
        loop:true,
        dots:false,
        navigation : false,
        items:5,
        margin:0,
        nav:false,
        autoplay:false,
        merge:true

    });
$('#foryouin').owlCarousel({
        loop:true,
        dots:false,
        navigation : false,
        items:4,
        margin:20,
        nav:false,
        autoplay:false,


    });
$('#foryouin2').owlCarousel({
        loop:true,
        dots:false,
        navigation : false,
        items:4,
        margin:20,
        nav:false,
        autoplay:false,


    });
$('#foryouin3').owlCarousel({
        loop:true,
        dots:false,
        navigation : false,
        items:4,
        margin:20,
        nav:false,
        autoplay:false,


    });
$(".js-more-project-button").click(function(){
        $(this).find('i').addClass('rote2s');
        setTimeout(function(){
            $('.kt-icon').removeClass('rote2s');
        }, 3000);
        load();
        
    });
    
    function load()
    {
        var total=$('.js-more-project-button').attr("total_number");
        total=parseInt(total);
        var now= Math.floor(total/6);
        now=parseInt(now);
        now = now +1;
        $.get('index/loadproject?page='+now+'',function(data){
             var el = jQuery(data);
             var a =el[43];
             $('.append').remove();
            $('body').append("<div class='append' style='display:none'>"+el[43].innerHTML+"</div>");
            var content = $('.append div').html();
            var a =jQuery(content);
            setTimeout(function(){
                $('.grid-container-3.grid-masonry-project').append(a).masonry('appended',a,true).delay(2000);
                $('.js-more-project-button').attr("total_number",total+6);
            },3000);
            
        });
           
    }
    $('select').click(function(){
        var now = $(this);
        $(this).css('display','none');
        $('.popup').css("display","block");
        $.each($(this).find('option'),function(){
            
            var selected=$(this).attr('selected');
            if(!selected)
            {
                $('.bg-popup').append("<div class='popup-li' value='"+$(this).attr("value")+" '>"+$(this).html()+"</div>");
            }
            else
            {   $('.bg-popup').append("<div class='popup-li popup-li-selected' value='"+$(this).attr("value")+" '>"+$(this).html()+"</div>");
                
            }
        })
       
        $('.popup-li').click(function(){
            var txt = $(this).attr("value");
            txt=parseInt(txt);
            
            $.each(now.find('option'),function(){
                if(txt == $(this).val())
                {
                    
                    $(this).attr("selected","selected");
                }
                else
                {
                    console.log($(this).val());
                    $(this).removeAttr("selected");
                }
                console.log('123');
               

            })
            now.css('display','block');
            $('.popup').css("display","none");
            $('.bg-popup').html('');
         })

     })