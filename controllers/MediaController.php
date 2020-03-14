<?php

namespace app\controllers;
use Yii;
use app\models\Media;
use  yii\web\UploadedFile;
use app\models\Users;

class MediaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $data=Media::find()->all();


        return $this->render('index',['medias'=>$data]);
    }




    public function actionUpload()
    {
        $model = new Media();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                $name=UploadedFile::getInstance($model,'filename');
                $path='uploads/'.md5($name->baseName). '.'.$name->extension;
                if ($name->saveAs($path)){
                    $model->filename=$name->baseName .'.'.$name->extension;
                    $model->filepath=$path;
                    $model->uesr_id=Yii::$app->user->id;

                    if ($model->save()){
                        return $this->redirect(['index']);
                    }
                }
            }
        }

        return $this->render('upload', [
            'model' => $model,
        ]);
    }
}
