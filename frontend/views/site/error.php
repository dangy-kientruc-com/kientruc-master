<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <p>
        The above error occurred while the Web server was processing your request.
    </p>
    <p>
        Please contact us if you think this is a server error. Thank you.
    </p>

    <?php
    use yii\widgets\ActiveForm;
    use common\models\LoginForm;

     $model = new LoginForm();

    ?>

    <?php $form = ActiveForm::begin(); ?>


        <?= $form->field($model, 'username')->label('Tên của bạn Name') ?>
        <?= $form->textảea($model, 'name')->label('Tên của bạn Name') ?>
        <?= $form->file($model, 'name')->label('Tên của bạn Name') ?>


        <?= $form->field($model, 'email') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>

    <?php ActiveForm::end(); ?>

    <form method="post">
    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
    <button type="submit"> Save </button>
</form>

</div>
