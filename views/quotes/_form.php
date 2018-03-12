<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Quotes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quotes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'quotes')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'character')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'movie')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
