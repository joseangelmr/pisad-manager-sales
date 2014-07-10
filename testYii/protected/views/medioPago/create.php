<?php
/* @var $this MedioPagoController */
/* @var $model MedioPago */

$this->breadcrumbs=array(
	'Medio Pagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MedioPago', 'url'=>array('index')),
	array('label'=>'Manage MedioPago', 'url'=>array('admin')),
);
?>

<h1>Create MedioPago</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>