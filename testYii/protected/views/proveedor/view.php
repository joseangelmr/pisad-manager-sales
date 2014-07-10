<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->ID_Proveedor,
);
$model_persona=Persona::model()->findByPk($model->ID_Persona); 
$model_direccion=Direccion::model()->findByPk($model->ID_Persona); 

if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'Ver Proveedores', 'url'=>array('index')),
		array('label'=>'Crear Proveedor', 'url'=>array('create')),
		array('label'=>'Actualizar Proveedor', 'url'=>array('update', 'id'=>$model->ID_Proveedor)),
		array('label'=>'Borrar Proveedor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Proveedor),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Proveedor', 'url'=>array('admin')),
	);
}
else if (Yii::app()->user->checkAccess("proveedor") && ($model->ID_Persona == Yii::app()->user->id)){
	$this->menu=array(
		array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>$model->ID_Proveedor)),
	);
}
?>

<h1>Proveedor</h1>

<?php 
	
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model_persona,
		'attributes'=>array(
			'User',
			'Nombre',
			'Correo',
			'Telefono',
		),
	)); 
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'RIF',
		),
	));
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model_direccion,
		'attributes'=>array(
			'Pais',
			'Estado',
			'Ciudad',
			'Direccion',
			'Codigo_Postal',
		),
	));
?>
