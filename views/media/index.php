<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Users;
$this->title="Media Gallery ";
$this->params['breadcrumbs'][]=$this->title;


?>
<h1><?php echo Html::encode($this->title)?></h1>

<p>
    <?php echo Html::a('Upload a file',['upload'],['class'=>'btn btn-primary' ,'disabled' => Yii::$app->user->isGuest ? "disabled" : null])?>


</p>


<div class="row">
    <?php foreach ($medias as $media){ ?>
    <div class="col-md-4">
        <div class="card">
            <img width="270" height="200" src="<?php echo Yii::getAlias('@web'.'/'.$media->filepath)?>">

          <!--  <div class="card-body"> Uploaded By :<h5><?php echo $media->uesr_id ?></h5></div>-->

        </div>


    </div>
    <?php }?>
</div>
