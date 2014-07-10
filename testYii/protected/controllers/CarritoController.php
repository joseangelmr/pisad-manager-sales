<?php

class CarritoController extends Controller
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
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('view'),
				'expression'=>'Yii::app()->user->checkAccess("usuario")',
				'expression'=>'Yii::app()->user->getState("model_carrito")->ID_Carrito==$_GET["id"]',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('editar'),
				'expression'=>'Yii::app()->user->checkAccess("usuario")',
				//'expression'=>'Yii::app()->user->getState("model_carrito")->ID_Carrito==$_GET["id"]',
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'expression'=>'Yii::app()->user->checkAccess("usuario")',
				'expression'=>'Yii::app()->user->getState("model_carrito")->ID_Carrito==$_GET["id"]',
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$model=new Pagos;
		
		if(isset($_POST['Pagos']))
		{
			$model->attributes=$_POST['Pagos'];
			$connection=Yii::app()->db;
		  $sql="DELETE FROM pagos
		  			WHERE ID_Carrito= $model->ID_Carrito";
		  $command = $connection->createCommand($sql);
		  $dataReader=$command->query();          
		  
			if($model->save())
				$this->redirect(array('//pagos/view','id'=>$model->ID_Pago));
		}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/** 
	 * Accion definida por Freddy Rondon.
	 * Para editar un carrito de compra cargando el producto a editar
	 */
	 public function actionEditar($id, $ctd)
	 {
		 $model=new Producto;
		 $model=Producto::model()->findByPk($id);
		 
			if(isset($_POST['Selecciona'])){
				$model_carrito = new Carrito;
				$model_Selecciona=new Selecciona;
				$model_Selecciona->attributes=$_POST['Selecciona'];
				$connection=Yii::app()->db;
				
				$id_carrito =Yii::app()->user->getState('model_carrito')->ID_Carrito;
				$id_producto = $model->ID_Producto;
				$cantidad_individual = $model_Selecciona->Cantidad_Individual;
				
				$model_carrito=Carrito::model()->findByPk($id_carrito);
				$model_carrito->Costo_Total=$model_carrito->Costo_Total+($model->Precio*$cantidad_individual)-($model->Precio*$ctd);
			  
			  if ($cantidad_individual == '0'){
	  		  $sql="DELETE FROM selecciona WHERE selecciona.ID_Carrito=$id_carrito and selecciona.ID_Producto=$id_producto";
				  $command = $connection->createCommand($sql);
				  $dataReader=$command->query();
			  }
			  else{
				  $sql="UPDATE selecciona SET Cantidad_Individual=$cantidad_individual WHERE selecciona.ID_Carrito=$id_carrito and selecciona.ID_Producto=$id_producto";
				  $command = $connection->createCommand($sql);
				  $dataReader=$command->query();
			  }
			  if($model_carrito->save())
					$this->redirect(array('view','id'=>Yii::app()->user->getState('model_carrito')->ID_Carrito));
			}	
			else {
			 $this->render('editar',array(
				'model'=>$model, 'ctd'=>$ctd,
			 ));
			}
	 } 

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Carrito;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Carrito']))
		{
			$model->attributes=$_POST['Carrito'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_Carrito));
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

		if(isset($_POST['Carrito']))
		{
			$model->attributes=$_POST['Carrito'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ID_Carrito));
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
		$dataProvider=new CActiveDataProvider('Carrito');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Carrito('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Carrito']))
			$model->attributes=$_GET['Carrito'];

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
		$model=Carrito::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='carrito-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
