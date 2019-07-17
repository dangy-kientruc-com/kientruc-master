

$(function () {
    'use strict';

    $('.js-index-grid-03').masonry({
        itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,
        horizontalOrder: true
    });
    $('.js-index-grid-01').masonry({
        itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,
        horizontalOrder: true
    });
    $('.js-index-grid-02').masonry({
        itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,
        horizontalOrder: true
    });
   
    $("#owl-demo").owlCarousel({
        loop:true,
        dots:false,
        navigation : false,
        items:10,
        margin:0,
        nav:false,
        autoplay:false,

    });
    var $grid = $('.js-index-grid-01').masonry({
        itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,horizontalOrder: true
    });
    $(".js-more-project-button").click(function(){
        $('.js-more-project-button').attr("disabled","disabled");
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
        var tag=$('.js-more-project-button').attr("tag");
        $.get('index/loadproject?page='+now+'&tag='+tag,function(data){
             var el = jQuery(data);
             //var a =el[43];
            //  $('.append').remove();
            // $('body').append("<div class='append' style='display:none'>"+el[43].innerHTML+"</div>");
            // var content = $('.append div').html();
            // var a =jQuery(content);
            setTimeout(function(){
                $('.grid-container-3.grid-masonry-project').append(el).masonry('appended',el,true).delay(2000);
                $('.js-more-project-button').attr("total_number",total+6);
                $('.js-more-project-button').removeAttr("disabled","disabled");
            },3000);
            
        });
           
    }
    calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);
    calcWidth('#navMainParent2', '.menuH4', '.menuUl', 10);
    calcWidth('#navMainParent3', '.menuH4', '.menuUl', 10);
    calcWidth('#navMainParenthot', '.menuH4hot', '.menuUlhot', 10);
    $(window).on('resize', function () {
        //calcWidth('#navMainParent0', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent1', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent2', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParent3', '.menuH4', '.menuUl', 10);
        calcWidth('#navMainParenthot', '.menuH4hot', '.menuUlhot', 10);
    });

});
$('.customer .float-right button').hover(function(){
    var a=$(this).attr('status');
    console.log(a);
    a= parseInt(a);
  
    if(a == 1) 
    {
        $('.style').html("<style>.tooltip-inner{background-color:#248445 !important;}</style>")
        $('.style style').append(".bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^='top'] .arrow::before{ border-top-color: #248445 !important;}")
       
    }
    else
    {
        $('.style').html("<style>.tooltip-inner{background-color:#000 !important;}</style>")
    }

    
})

function createHistory(link,tt){
    document.title = tt;
    history.pushState({}, "", link);
}

$('.pagehome li a').click(function(e){
    $('.pagehome li').removeClass('active');
    $(this).parent().addClass('active');
    href=$(this).attr("href");
    var tag= $(this).attr("tag");
     $('.js-more-project-button').attr("total_number",6);
     $('.js-more-project-button').attr("tag",tag);
    $.get('index/loadtag?tag='+tag,function(data){
        var el = jQuery(data);
       
             
          setTimeout(function(){
            $('.grid-container-3.grid-masonry-project').html("");
            $('.grid-container-3.grid-masonry-project').append(el);
            $('.grid-container-3.grid-masonry-project').masonry('reloadItems');
            $('.grid-container-3.grid-masonry-project').masonry({
                 itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,horizontalOrder: true
            })
          },500)

          
    });



    createHistory(href,'tag-home');
    e.preventDefault();
    return false;
})





 $('.home-login-mansory').masonry({
         itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,
        horizontalOrder: true,
         gutter: 37,
    })

 $('.home-login-tag1').masonry({
         itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,
        horizontalOrder: true,
         gutter: 37,
    })
  $('.home-login-tag2').masonry({
         itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,
        horizontalOrder: true,
         gutter: 37,
    })

 $('.nav-li').click(function(){
    $('.nav-li').removeClass('active');
    $(this).addClass('active');
    var tag = $(this).attr('tag');
    $('.tag').css("display","none");
    $('.tag'+tag).css("display","block");
    $('.home-login-tag'+tag).masonry({
         itemSelector: '.item',
        //columnWidth: 310,
        isFitWidth: true,
        horizontalOrder: true,
         gutter: 37,
    })
 })