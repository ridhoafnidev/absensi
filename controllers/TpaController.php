<?php

namespace app\controllers;

use Yii;
use app\models\Tpa;
use app\models\TpaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use \yii\web\Response;
use yii\helpers\Html;
use yii\web\UploadedFile;

/**
 * TpaController implements the CRUD actions for Tpa model.
 */
class TpaController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'bulkdelete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tpa models.
     * @return mixed
     */
    public function actionIndex()
    {    
        $searchModel = new TpaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    /**
     * Displays a single Tpa model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {   
        $request = Yii::$app->request;
        if($request->isAjax){
            Yii::$app->response->format = Response::FORMAT_JSON;
            return [
                    'title'=> "Tpa #".$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $this->findModel($id),
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
        }else{
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new Tpa model.
     * For ajax request will return json object
     * and for non-ajax request if creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new Tpa();  

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Create new Tpa",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
                }else if($model->load($request->post())){
                // foto 1
                $model->foto_1 = UploadedFile::getInstance($model,'foto_1');
                if($model->foto_1){
                        $file = $model->foto_1->name;
                        if ($model->foto_1->saveAs('gambar/tpa/'.$file) ){
                            $model->foto_1 = $file;           
                    }
                }
                 // foto 2
                //  $model->foto_2 = UploadedFile::getInstance($model,'foto_2');
                //  if($model->foto_2){
                //      $file = $model->foto_2->name;
                //      if ($model->foto_2->saveAs('gambar/tpa/'.$file) ){
                //          $model->foto_2 = $file;           
                //  }
                // foto 3
                // $model->foto_3 = UploadedFile::getInstance($model,'foto_3');
                // if($model->foto_3){
                //        $file = $model->foto_3->name;
                //        if ($model->foto_3->saveAs('gambar/tpa/'.$file) ){
                //            $model->foto_3 = $file;           
                //     }
                // }
                $model->save(false);
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Create new Tpa",
                    'content'=>'<span class="text-success">Create Tpa success</span>',
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Create More',['create'],['class'=>'btn btn-primary','role'=>'modal-remote'])
        
                ];         
            }else{           
                return [
                    'title'=> "Create new Tpa",
                    'content'=>$this->renderAjax('create', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
        
                ];         
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_tpa]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
        }
    

    /**
     * Updates an existing Tpa model.
     * For ajax request will return json object
     * and for non-ajax request if update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $request = Yii::$app->request;
        $model = $this->findModel($id);  
        $old_file1 = $model->foto_1;
        $old_file2 = $model->foto_2;
        $old_file3 = $model->foto_3;

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            if($request->isGet){
                return [
                    'title'=> "Update Tpa #".$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];         
            }else if($model->load($request->post())){
                // foto 1
                $model->foto_1 = UploadedFile::getInstance($model,'foto_1');
                if($model->foto_1){
                    $file = $model->foto_1->name;
                    if ($model->foto_1->saveAs('gambar/tpa/'.$file)){
                        $model->foto_1 = $file;           
                    }
                }
                if (empty($model->foto_1)){
                     $model->foto_1 = $old_file1;
                } 
                // foto 2
                $model->foto_2 = UploadedFile::getInstance($model,'foto_2');
                if($model->foto_2){
                    $file = $model->foto_2->name;
                    if ($model->foto_2->saveAs('gambar/tpa/'.$file)){
                        $model->foto_2 = $file;           
                    }
                }
                if (empty($model->foto_2)){
                     $model->foto_2 = $old_file2;
                }
                // foto 3
                $model->foto_3 = UploadedFile::getInstance($model,'foto_3');
                if($model->foto_3){
                    $file = $model->foto_3->name;
                    if ($model->foto_3->saveAs('gambar/tpa/'.$file)){
                        $model->foto_3 = $file;           
                    }
                }
                if (empty($model->foto_3)){
                     $model->foto_3 = $old_file3;
                }
                $model->save(false);
                return [
                    'forceReload'=>'#crud-datatable-pjax',
                    'title'=> "Tpa #".$id,
                    'content'=>$this->renderAjax('view', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                            Html::a('Edit',['update','id'=>$id],['class'=>'btn btn-primary','role'=>'modal-remote'])
                ];    
            }else{
                 return [
                    'title'=> "Update Tpa #".$id,
                    'content'=>$this->renderAjax('update', [
                        'model' => $model,
                    ]),
                    'footer'=> Html::button('Close',['class'=>'btn btn-default pull-left','data-dismiss'=>"modal"]).
                                Html::button('Save',['class'=>'btn btn-primary','type'=>"submit"])
                ];        
            }
        }else{
            /*
            *   Process for non-ajax request
            */
            if ($model->load($request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id_tpa]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }
    }

    /**
     * Delete an existing Tpa model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $request = Yii::$app->request;
        $this->findModel($id)->delete();

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }


    }

     /**
     * Delete multiple existing Tpa model.
     * For ajax request will return json object
     * and for non-ajax request if deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionBulkdelete()
    {        
        $request = Yii::$app->request;
        $pks = explode(',', $request->post( 'pks' )); // Array or selected records primary keys
        foreach ( $pks as $pk ) {
            $model = $this->findModel($pk);
            $model->delete();
        }

        if($request->isAjax){
            /*
            *   Process for ajax request
            */
            Yii::$app->response->format = Response::FORMAT_JSON;
            return ['forceClose'=>true,'forceReload'=>'#crud-datatable-pjax'];
        }else{
            /*
            *   Process for non-ajax request
            */
            return $this->redirect(['index']);
        }
       
    }

    /**
     * Finds the Tpa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tpa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tpa::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
