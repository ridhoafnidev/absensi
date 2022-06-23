<?php

namespace app\controllers;

use Yii;
use app\models\TbTunjangan;
use app\models\TbUser;
use app\models\TbPegawai;
use app\models\TbPegawaiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\filters\AccessControl;
/**
 * PegawaiController implements the CRUD actions for TbPegawai model.
 */
class PegawaiController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => false,
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
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
     * Lists all TbPegawai models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TbPegawaiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TbPegawai model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new TbPegawai model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TbPegawai();
        $modelUser = new TbUser();

        if ($model->load(Yii::$app->request->post())) {
            $transaction = \Yii::$app->db->beginTransaction();
            try {
                $user = TbUser::find()->where(['id_user' => Yii::$app->getUser()->id])->one();

                $authkey = Yii::$app->security->generateRandomString();
                $accesToken = Yii::$app->security->generateRandomString();

                if(strlen($model->nip) > 0) {
                    $modelUser->office_id = $user->office_id;
                    $modelUser->username = $model->nip;
                    $modelUser->password = Yii::$app->getSecurity()->generatePasswordHash($model->nip);
                    $modelUser->authkey = $authkey;
                    $modelUser->accesToken = $accesToken;
                } else {
                    $modelUser->office_id = $user->office_id;
                    $modelUser->username = $model->nik;
                    $modelUser->password = Yii::$app->getSecurity()->generatePasswordHash($model->nik);
                    $modelUser->authkey = $authkey;
                    $modelUser->accesToken = $accesToken;
                }
                if ($modelUser->save(false)){
                    $model->user_id = $modelUser->id_user;
                    $model->office_id = $user->office_id;
                    $model->save();
                }
                $transaction->commit();
                return $this->redirect(['view', 'id' => $model->id_pegawai]);
            }catch(\Exception $e){
                $transaction->rollBack();
                echo '<pre>'; print_r($e); exit();
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TbPegawai model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_pegawai]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TbPegawai model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionFormTunjangan($idGrade)
    {
        $modelTbTunjang = TbTunjangan::findOne($id);
        return $this->renderAjax('form-tunjangan',[
            'modelTbTunjang'    => $modelTbTunjang,
        ]);     
        
    }

    public function actionDropdownGrade($id)
    {
        
        $posts =  TbTunjangan::find()
            ->where(['id' => $id])
            ->one();
            echo"<label>Tunjangan</label>";
        echo "<input  id='tunjangan' type='number' class='form-control' name='tunjangan' value='".$posts->nominal_tunjangan."' readonly>";

        // $countPosts = TbTunjangan::find()
        // ->where(['id' => $id])
        // ->count();

        // $posts =  TbTunjangan::find()
        //     ->where(['id' => $id])
        //     ->all();
            
        // if($countPosts>0){
        //     foreach($posts as $post){
        //         echo "<option value='".$post->id."'>".Yii::t('app',$post->nominal_tunjangan)."</option>";
        //     }
        // }

    }
    /**
     * Finds the TbPegawai model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return TbPegawai the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = TbPegawai::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
