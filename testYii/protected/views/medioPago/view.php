<?php
/* @var $this MedioPagoController */
/* @var $model MedioPago */

$this->breadcrumbs=array(
	'Medio Pagos'=>array('index'),
	$model->ID_Pago,
);

$this->menu=array(
	array('label'=>'List MedioPago', 'url'=>array('index')),
	array('label'=>'Create MedioPago', 'url'=>array('create')),
	array('label'=>'Update MedioPago', 'url'=>array('update', 'id'=>$model->ID_Pago)),
	array('label'=>'Delete MedioPago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Pago),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MedioPago', 'url'=>array('admin')),
);
?>

<h1>View MedioPago #<?php echo $model->ID_Pago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Fecha_Pago',
		'ID_Pago',
	),
)); ?>
