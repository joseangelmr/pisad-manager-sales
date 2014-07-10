<?php
/* @var $this SoporteTecnicoController */
/* @var $model SoporteTecnico */

/* $this->breadcrumbs=array(
	'Soporte Tecnicos'=>array('index'),
	$model->ID_Pregunta,
); */

if (Yii::app()->user->checkAccess("usuario")) {
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('//usuario/view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('//usuario/update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Ver Carrito de Compra', 'url'=>array('/carrito/view','id'=>Yii::app()->user->getState('model_carrito')->ID_Carrito)),
	array('label'=>'Historial de Compras', 'url'=>array('/factura')),
	array('label'=>'Preguntas', 'url'=>array('/soporteTecnico/create')),
	array('label'=>'Respuestas', 'url'=>array('/soporteTecnico')),
	);
}
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

<h1>View SoporteTecnico #<?php echo $model->ID_Pregunta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Pregunta',
		'Fecha',
		'Pregunta',
		'Respuesta',
	),
)); ?>
