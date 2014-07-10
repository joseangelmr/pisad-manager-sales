<?php

class DepositoController extends Controller
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
				'actions'=>array('index'),
				'expression'=>'Yii::app()->user->checkAccess("administrador")',
			),
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('view'),
				'expression'=>'Yii::app()->user->checkAccess("administrador")',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create'),
				'expression'=>'Yii::app()->user->checkAccess("usuario")',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','update'),
				'expression'=>'Yii::app()->user->checkAccess("administrador")',
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
	 * actionCreate editada para ir directo a factura ya que no se ha implementado la forma de conexion con los bancos
	 */
	public function actionCreate()
	{
		$model=new Deposito;
		$model_factura=new Factura;
		$model_carrito=new Carrito;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Deposito']))
		{
			$model->attributes=$_POST['Deposito'];
			$model_factura->Monto=Yii::app()->user->getState('model_carrito')->Costo_Total;
			$model_factura->ID_Carrito=Yii::app()->user->getState('model_carrito')->ID_Carrito;
			$model_factura->Impuesto='0';
			$model_factura->ID_Pago=$model->ID_Pago;
			$model_factura->ID_Usuario=Yii::app()->user->getState('id_tipo');
			
			if($model->save()){
				if($model_factura->save()){
					$model_carrito->ID_Usuario=Yii::app()->user->getState('id_tipo');
					if($model_carrito->save()){
						$id_carrito_viejo = Yii::app()->user->getState('model_carrito')->ID_Carrito;

						$connection=Yii::app()->db;
						$sql="UPDATE carrito SET estado='d'
					  			WHERE carrito.ID_Carrito = $id_carrito_viejo";
					  $command = $connection->createCommand($sql);
					  $dataReader=$command->query();

						Yii::app()->user->setState('model_carrito',$model_carrito);
						$this->redirect(array('//factura/view','id'=>$model_factura->ID_Factura));
					}
				}
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
		// $this->performAjaxValidation($model);

		if(isset($_POST['Deposito']))
		{
			$model->attributes=$_POST['Deposito'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_Pago));
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
		$dataProvider=new CActiveDataProvider('Deposito');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Deposito('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Deposito']))
			$model->attributes=$_GET['Deposito'];

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
		$model=Deposito::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='deposito-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}