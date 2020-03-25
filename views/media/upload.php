<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\Url;

if(Yii::$app->user->isGuest){
    return Yii::$app->getResponse()->redirect(array(Url::to(['media/index'])));

}

$this->title="Upload File";
$this->params['breadcrumbs'][]=$this->title;
/* @var $this yii\web\View */
/* @var $model app\models\Media */
/* @var $form ActiveForm */
?>
<div class="media-upload">
    <h2><?php echo Html::encode($this->title)?></h2>

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

        <?= $form->field($model, 'filename')->fileInput() ?>



        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- media-upload -->
