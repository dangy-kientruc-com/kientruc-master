<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 5/22/2019
 * Time: 10:17 AM
 */

use yii\bootstrap4\Modal;

?>
<?php
Modal::begin([
    'headerOptions' => false,
    'closeButton' => false,
    'id' => 'myModal-see-project',
    'size' => 'modal-full',
    //'tabIndex' => false,
    'clientOptions' => [
        'backdrop' => 'static',
        'keyboard' => false,
        'focus' => false,
    ],
]);
?>
<button type="button" class="close btn-fixed-close"
        data-dismiss="modal" aria-label="Close">
    <i class="kt-icon size-24x24">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"></path>
        </svg>
    </i>
</button>
<div class="content-cus-see-project"></div>
<?php
Modal::end();
?>