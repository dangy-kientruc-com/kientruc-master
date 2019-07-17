<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 4/25/2019
 * Time: 4:43 PM
 */

use yii\bootstrap4\Modal;

Modal::begin([
    'headerOptions' => false,
    'closeButton' => false,
    'id' => 'myModal-see-album',
    'size' => 'modal-cus-670',
    //'tabIndex' => false,
    'clientOptions' => [
        'backdrop' => 'static',
        'keyboard' => false,
        'focus' => false,
    ],
]);
?>
<button style="position: fixed;top: 25px;right: 40px;height: 42px;width: 42px;border-radius: 30px;background-color: #FFFFFF;display: inline-flex;margin-left: 10px;border-width: 0;"
        type="button" data-dismiss="modal" aria-label="Close">
    <i class="kt-icon size-24x24">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.0" viewBox="0 0 24 24">
            <path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path>
        </svg>
    </i>
</button>
<div class="content-cus-see-album"></div>
<?php
Modal::end();
?>
<script type="text/javascript">
    async function modalAddAlbum() {
        var jqxhr = await $.ajax('/site/ajax-add-album')
            .done(function (msg) {
                console.log('success');
                return msg;
            })
            .fail(function (msg) {
                console.log('error');
            })
            .always(function (msg) {
                console.log('complete');
            });
        var mod = await $('body').find('#myModal-see-album');
        await mod.find('.content-cus-see-album').html(jqxhr);
        await mod.modal({
            keyboard: false,
            show: true,
            backdrop: 'static'
        });
        await mod.css({'z-index': '99994'});
        await $('body').find('.modal-backdrop').last().addClass('important-99993');
    }
</script>
<style type="text/css">
    div.modal-dialog.modal-cus-670 {
        width: 680px;
        max-width: 680px;
    }

    div.modal-dialog.modal-cus-670 .modal-content {
        padding: 30px;
    }

    .modal-backdrop.fade.show.modal-stack.important-99993 {
        z-index: 99993 !important;
    }
</style>
