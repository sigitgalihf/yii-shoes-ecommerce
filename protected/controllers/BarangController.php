<?php

class BarangController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */

	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','getBarang','Sport','Bots','Flat','Heels','Slipon','Wedges'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
			
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Barang;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Barang']))
		{
			$model->attributes=$_POST['Barang'];
			$uploaded = CUploadedFile::getInstance($model, 'images');
			echo $uploaded->name;
			$model->images='../images/foto/'.$uploaded->name;
			$savePic = Yii::app()->basePath.'/'.$model->images;
			if($model->save()){
				$uploaded->saveAs($savePic);
				$this->redirect(array('view','id'=>$model->kd_barang));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
        $this->performAjaxValidation($model);

		if(isset($_POST['Barang']))
		{
			$model->attributes=$_POST['Barang'];
			$uploaded = CUploadedFile::getInstance($model, 'images');
			echo $uploaded->name;
			$model->images='../images/foto/'.$uploaded->name;
			$savePic = Yii::app()->basePath.'/'.$model->images;
			if($model->save())
				$uploaded->saveAs($savePic);
				$this->redirect(array('view','id'=>$model->kd_barang));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Barang');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Barang('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Barang']))
			$model->attributes=$_GET['Barang'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Barang::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='barang-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	/*
	 * Call JSON Javascript
	 *
	 *
	 */
	public function actionGetBarang(){
		$connection =Yii::app()->db;
		$sql ="select * from barang order by kd_barang desc";
		$model = Barang::model()->findAllBySql($sql);
		echo CJSON::encode($model);
	}

	public function actionSport(){
		$connection =Yii::app()->db;
		$sql =$connection->createCommand(
			"select * from barang WHERE jenis_barang='Sport'");
		$open = $sql->queryAll();
		$dataProvider = new CArrayDataProvider(
			$open, array(
				'keyField'=>'kd_barang'
				));
		echo CJSON::encode($open);
	}

	public function actionBots(){
		$connection =Yii::app()->db;
		$sql =$connection->createCommand(
			"select * from barang WHERE jenis_barang='Boots'");
		$open = $sql->queryAll();
		$dataProvider = new CArrayDataProvider(
			$open, array(
				'keyField'=>'kd_barang'
				));
		echo CJSON::encode($open);
	}
	public function actionFlat(){
		$connection =Yii::app()->db;
		$sql =$connection->createCommand(
			"select * from barang WHERE jenis_barang LIKE 'F%'");
		$open = $sql->queryAll();
		$dataProvider = new CArrayDataProvider(
			$open, array(
				'keyField'=>'kd_barang'
				));
		echo CJSON::encode($open);
	}
	public function actionHeels(){
		$connection =Yii::app()->db;
		$sql =$connection->createCommand(
			"select * from barang WHERE jenis_barang='Heels'");
		$open = $sql->queryAll();
		$dataProvider = new CArrayDataProvider(
			$open, array(
				'keyField'=>'kd_barang'
				));
		echo CJSON::encode($open);
	}
	public function actionSlipon(){
		$connection =Yii::app()->db;
		$sql =$connection->createCommand(
			"select * from barang WHERE jenis_barang='Slipon'");
		$open = $sql->queryAll();
		$dataProvider = new CArrayDataProvider(
			$open, array(
				'keyField'=>'kd_barang'
				));
		echo CJSON::encode($open);
	}
	public function actionWedges(){
		$connection =Yii::app()->db;
		$sql =$connection->createCommand(
			"select * from barang WHERE jenis_barang='Wedges'");
		$open = $sql->queryAll();
		$dataProvider = new CArrayDataProvider(
			$open, array(
				'keyField'=>'kd_barang'
				));
		echo CJSON::encode($open);
	}
	

	
}
