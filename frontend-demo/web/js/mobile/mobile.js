async function modalMenu(obj) {
    await $('body').addClass('overflow');
    await $('body').find('.js-box-fixed').addClass('active');
    await $('body').find('.js-box-fixed').attr('data-close', obj.close);
    await $('body').find(obj.classAttr).addClass('active');
}

async function modalCloseMenu(obj) {
    await $('body').find(obj.classAttr).removeClass('active');
    await $('body').find('.js-box-fixed').removeClass('active');
    await $('body').removeClass('overflow');
}

async function modalCloseAll(el) {
    if ($(el).attr('data-close') === 'true') {
        console.log('Duoc tat');
        $('body').find('[data-js-check]').each(async function () {
            await modalCloseMenu({classAttr: '#' + $(this).attr('id')});
        });
    } else {
        console.log('Khong duoc tat');
    }
}

async function showItem2(json) {
    await $('body').find('.item1').css({'display':'none'});
    await $('body').find('.item2').css({'left': '0'});

    if (json.choi !== undefined) {
        //active cai menu dang click
        var li = await $('body').find('li[data-choise=' + json.choi + ']');
        await li.siblings().removeClass('active');
        await li.addClass('active');
    }

    if (json.item !== undefined) {
        var its = await $('.item2').find('div[data-item=' + json.item + ']');
        await its.siblings().addClass('d-none');
        await its.removeClass('d-none');
    }

    await $('body').find('.item2').css({'position': 'inherit'});

    return false;
}

async function prevNote() {
    await $('body').find('.item2').css({'position': 'absolute'});
    await $('body').find('.item2').css({'left': '-100%'});
    await $('body').find('.item1').fadeIn('slow');
}