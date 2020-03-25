<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use app\models\Users;
$this->title="Media Gallery ";
$this->params['breadcrumbs'][]=$this->title;


?>

<h1><?php echo Html::encode($this->title)?></h1>



<?php if (Yii::$app->session->hasFlash('success')): ?>

<?php endif; ?>
<style>
    body {

        font-family: "Asap", sans-serif;
        color:#989898;
        margin:10px;
        font-size:16px;
    }

    #demo {
        height:100%;
        position:relative;
        overflow:hidden;
    }


    .green{
        background-color:#6fb936;
    }
    .thumb{
        margin-bottom: 30px;
    }

    .page-top{
        margin-top:85px;
    }


    img.zoom {
        width: 100%;
        height: 200px;
        border-radius:5px;
        object-fit:cover;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
    }


    .transition {
        -webkit-transform: scale(1.2);
        -moz-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
    }
    .modal-header {

        border-bottom: none;
    }
    .modal-title {
        color:#000;
    }
    .modal-footer{
        display:none;
    }

</style>

<script>
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function(){

            $(this).addClass('transition');
        }, function(){

            $(this).removeClass('transition');
        });
    });

</script>



<div class="container page-top">



    <div class="row">

        <?php foreach ($medias as $media){ ?>
        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <img width="100%" height="100%" src="<?php echo Yii::getAlias('@web'.'/'.$media->filepath)?>">
            <p style="font-family:Dubai; color: dimgrey; font-weight: bold">Uploaded By: <?php echo ucfirst($media->username)?></p>

        </div>

                        <?php }?>

    </div></div>
