<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

/* $this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->ID_Proveedor,
); */
$model_persona=Persona::model()->findByPk($model->ID_Persona); 
$model_direccion=Direccion::model()->findByPk($model->ID_Persona); 

if (Yii::app()->user->checkAccess("proveedor")) {
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('//proveedor/view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('//proveedor/update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Crear Contratos', 'url'=>array('/contratos/create')),
	array('label'=>'Historial de Contratos', 'url'=>array('/contratos')),
	array('label'=>'Solicitar Cobros', 'url'=>array('/reciboPago/create')),
	array('label'=>'Historial Cobros', 'url'=>array('/reciboPago')),
	array('label'=>'Preguntas', 'url'=>array('/soporteTecnico/create')),
	array('label'=>'Respuestas', 'url'=>array('/soporteTecnico')),
	);
}

if (Yii::app()->user->checkAccess("administrador")) {
$this->menu=array(
	array('label'=>'Administrar Proveedores', 'url'=>array('/proveedor/admin')),
	array('label'=>'Administrar Contratos', 'url'=>array('/contratos/admin')),
	array('label'=>'Administrar Cobros', 'url'=>array('/reciboPago/admin')),
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
