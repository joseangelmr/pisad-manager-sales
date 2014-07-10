<?php

class ContratosController extends Controller
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
				'actions'=>array('index','view',),
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
		$model=new Contratos;
		$model_proveedor=new Proveedor;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation(array($model,$model_proveedor));

		if(isset($_POST['Contratos'], $_POST['Proveedor']))
		{
			$model->attributes=$_POST['Contratos'];
			$model_proveedor->attributes=$_POST['Proveedor'];

			$model->ID_Contrato= 1;
			$valid = $model_proveedor->validate();
			$model->estado='P';
			$valid = $model->validate() && $valid;
		
			if($valid){
			$model->ID_Proveedor = Yii::app()->user->getState('id_tipo');
			//$model_proveedor->RIF = $model_proveedor->RIF;
			if($model->save() && $model_proveedor->update())
				$this->redirect(array('view','id'=>$model->ID_Contrato));
			}
		}
		$this->render('create',array( 
			'model'=>$model, 
			'model_proveedor'=>$model_proveedor,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=new Contratos;
		$model_proveedor=new Proveedor;

		$this->performAjaxValidation(array($model,$model_proveedor));
		$model=$this->loadModel($id);
		
		if(isset($_POST['Proveedor'], $_POST['Contraots']))
		{
			$model->attributes=$_POST['Contratos'];
			$model_proveedor->attributes=$_POST['Proveedor'];


			$model_proveedor->setIsNewRecord(false);
			$model->ID_Proveedor = Yii::app()->user->getState('id_tipo');
			$model_proveedor->RIF = $model_proveedor->RIF;
			//$model_proveedor->setIsNewRecord(false);
			if($model->save() && $model_proveedor->update())
				$this->redirect(array('view','id'=>$model->ID_Contrato));
		}
		$this->render('update',array( 
			'model'=>$model, 
			'model_provedor'=>$model_proveedor,
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
		$dataProvider=new CActiveDataProvider('Contratos');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Contratos('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Contratos']))
			$model->attributes=$_GET['Contratos'];

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
		$model=Contratos::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='contratos-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
