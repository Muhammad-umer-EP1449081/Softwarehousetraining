<?php

namespace app\controllers;

use Yii;
use app\models\relationship;
use app\models\relationshipSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RelationshipController implements the CRUD actions for relationship model.
 */
class RelationshipController extends Controller
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
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all relationship models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new relationshipSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

public function actionFriendlist()
    {


//$all_friends = relationship::find()->orwhere(['user_id_one'=>Yii::$app->user->identity->id,'user_id_two'=>Yii::$app->user->identity->id,'status'=> '1'])->all();

$all_friends = relationship::find()->where(['status'=> '1'])->andWhere(['or',
           ['user_id_one'=>Yii::$app->user->identity->id],
           ['user_id_two'=>Yii::$app->user->identity->id],
       ])->all();



        return $this->render('friend_list', 
            [
            'all_friends' => $all_friends,
        ]);


    }






 public function actionAccept($id)
    {
$accepted = relationship::find()->where(['id'=>$id])->one();

$accepted->status = '1' ; 

$accepted->save();

//return $this->redirect('/Final_photo_yii2/web/index.php?r=relationship/allrequest');
return $this->redirect(['allrequest']);

}



     public function actionAllrequest()
    {
        $all_requests = relationship::find()->where(['user_id_two'=>Yii::$app->user->identity->id,'status'=> '0'])->all();



        return $this->render('all_request', 
            [
            'all_requests' => $all_requests,
        ]);



    }




    /**
     * Displays a single relationship model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new relationship model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new relationship();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing relationship model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing relationship model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the relationship model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return relationship the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = relationship::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
