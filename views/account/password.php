<?php

/**
 * Podium Module
 * Yii 2 Forum Module
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title                   = Yii::t('podium/view', 'Change Password');
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="row">
    <div class="col-sm-12">
        <div class="alert alert-info">
            <span class="glyphicon glyphicon-info-sign"></span> <?= Yii::t('podium/view', 'Enter new password for your account. Password must contain uppercase and lowercase letter, digit, and be at least 6 characters long.') ?>
        </div>
    </div>
    <div class="col-sm-4 col-sm-offset-4">
        <?php $form = ActiveForm::begin(['id' => 'password-form']); ?>
            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('podium/view', 'New Password')])->label(false) ?>
            </div>
            <div class="form-group">
                <?= $form->field($model, 'password_repeat')->passwordInput(['placeholder' => Yii::t('podium/view', 'Repeat New Password')])->label(false) ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('<span class="glyphicon glyphicon-ok-sign"></span> ' . Yii::t('podium/view', 'Change Password'), ['class' => 'btn btn-block btn-danger', 'name' => 'password-button']) ?>
            </div>
        <?php ActiveForm::end(); ?>
    </div>
</div><br>