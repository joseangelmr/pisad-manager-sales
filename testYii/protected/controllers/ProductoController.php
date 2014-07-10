<?php

class ProductoController extends Controller
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
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'expression'=>'Yii::app()->user->checkAccess("administrador")',
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
		$model=new Carrito;
		$model_selecciona=new Selecciona;
		
		if(Yii::app()->user->checkAccess("usuario")){
			$model=Carrito::model()->findByPk(Yii::app()->user->getState('model_carrito')->ID_Carrito);
			$model2=Carrito::model()->findByPk(Yii::app()->user->getState('model_carrito')->ID_Carrito);
		}
		if(isset($_POST['Carrito']))
		{
			$model->attributes=$_POST['Carrito'];
			$model_selecciona->attributes=$_POST['Selecciona'];
			
			$ID_Carrito = Yii::app()->user->getState('model_carrito')->ID_Carrito;
			$connection=Yii::app()->db;
		  $sql="SELECT ID_Producto, Cantidad_Individual
		  		  FROM selecciona 
		  			WHERE selecciona.ID_Carrito= $ID_Carrito and selecciona.ID_Producto = $model_selecciona->ID_Producto";
		  $command = $connection->createCommand($sql);
		  $dataReader=$command->query();          
		  $rows=$dataReader->readAll();
		  
		  if(empty($rows)){	
		  	$model->Costo_Total=($model_selecciona->Cantidad_Individual* $model->Costo_Total)+$model2->Costo_Total;
				if($model->save()){
					if($model_selecciona->save())
						$this->redirect(array('//carrito/view','id'=>Yii::app()->user->getState('model_carrito')->ID_Carrito));
				}
			}
			else{
				$sql="DELETE FROM selecciona 
			  			WHERE selecciona.ID_Carrito= $ID_Carrito and selecciona.ID_Producto = $model_selecciona->ID_Producto";
			  $command = $connection->createCommand($sql);
			  $dataReader=$command->query();
			  $model->Costo_Total=($model_selecciona->Cantidad_Individual* $model->Costo_Total)+($model2->Costo_Total-($model->Costo_Total*$rows[0]['Cantidad_Individual']));
			  if($model->save()){
					if($model_selecciona->save())
						$this->redirect(array('//carrito/view','id'=>Yii::app()->user->getState('model_carrito')->ID_Carrito));
				}
			}
		}
	
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
		$model=new Producto;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['Producto']))
		{
			$model->attributes=$_POST['Producto'];
			$uploadedFile=CUploadedFile::getInstance($model,'imagen');
			if($model->save()){
				$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/themes/verde-negro/img/productos/'.$model->ID_Producto.'.jpg');
				$this->redirect(array('view','id'=>$model->ID_Producto));
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

		if(isset($_POST['Producto']))
		{
			//$_POST['Producto']['imagen'] = Yii::app()->theme->baseUrl."/img/productos/".$model->ID_Producto.".jpg";
			$model->attributes=$_POST['Producto'];
			$uploadedFile=CUploadedFile::getInstance($model,'imagen');
			if($model->save())
				if(!empty($uploadedFile))
					$uploadedFile->saveAs(Yii::getPathOfAlias('webroot').'/themes/verde-negro/img/productos/'.$model->ID_Producto.'.jpg');
				$this->redirect(array('view','id'=>$model->ID_Producto));
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
		$dataProvider=new CActiveDataProvider('Producto');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Producto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Producto']))
			$model->attributes=$_GET['Producto'];

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
		$model=Producto::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='producto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
