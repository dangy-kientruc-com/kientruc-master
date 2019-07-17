$('.home-top-right select').change(function(){
		var lct =$('.lct').val();
		var tt =$('.tt').val();
		var pc =$('.pc').val();
		var hm =$('.hm').val();
				window.location.href = 'tag-project?lct='+lct+'&tt='+tt+'&pc='+pc+'&hm='+hm;

	})
     $('.home-category-masonry').masonry({
            itemSelector: '.item',
            gutter: 37,
            initLayout: true,
            columnWidth:'.item',
            percentPosition: true,
            horizontalOrder: true
         });
     $('.form-selectmb').click(function(){
        $('.bg-home').addClass('active');
         $('.home-filter-mb').css({'transform':'translateX(0px)','transition':'0.5s'});
     })
     $('.home-filter-mb-form-submit').click(function(){

        var lct =$('.lct-mb').val();
        var tt =$('.tt-mb').val();
        var pc =$('.pc-mb').val();
        var hm =$('.hm-mb').val();
        window.location.href = 'tag-project?lct='+lct+'&tt-'+tt+'&pc-'+pc+'&hm='+hm;
     })
     $('.home-filter-mb-close').click(function(){
        $('.bg-home').removeClass('active');
        $('.home-filter-mb').css({'transform':'translateX(235px)','transition':'0.5s'});
     })
     $(".loadhomecategory").click(function(e){
        $('.js-more-project-button').attr("disabled","disabled");
        $(this).find('i').addClass('rote2s');
        setTimeout(function(){
            $('.kt-icon').removeClass('rote2s');
        }, 3000);

        
        e.preventDefault();
        var url = $('.text-center a').attr("href");
        createHistory(url,'tag-project');
        load();
        return false;
    });
    function load()
    {

        var page= $('.loadhomecategory').attr('page');
        page=parseInt(page);
      
        var lct = $('.loadhomecategory').attr('lct');
        var tt = $('.loadhomecategory').attr('tt');
        var pc =$('.loadhomecategory').attr('pc');
        var hm = $('.loadhomecategory').attr('hm');
       
        $.get('index/loadhomecategory?lct='+lct+'&tt='+tt+'&pc='+pc+'&hm='+hm+'&page='+page+'' ,function(data){
            var el = jQuery(data);
            setTimeout(function(){
                $('.home-category-masonry').append(el).masonry('appended',el,true).delay(2000);
                 $('.loadhomecategory').attr("page",page);
                 $('.js-more-project-button').removeAttr("disabled","disabled");
            },3000);
        })
        page=page+1;
        $('.text-center a').attr("href",'tag-project?lct='+lct+'&tt='+tt+'&pc='+pc+'&hm='+hm+'&page='+page+'' );
           
    }
function createHistory(link,tt){
    document.title = tt;
    history.pushState({}, "", link);
}

function closeModalViewDiscuss(el) {
    closeAllPopup();
    window.history.back();
}

$('.select').click(function(){
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