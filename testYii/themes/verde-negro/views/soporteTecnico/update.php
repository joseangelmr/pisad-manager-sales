<?php
/* @var $this SoporteTecnicoController */
/* @var $model SoporteTecnico */

/* $this->breadcrumbs=array(
	'Soporte Tecnicos'=>array('index'),
	$model->ID_Pregunta=>array('view','id'=>$model->ID_Pregunta),
	'Update',
); */

if (Yii::app()->user->checkAccess("proveedor")) {
$this->menu=array(
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

<h1>Responder preguntas. <?php echo $model->ID_Pregunta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
