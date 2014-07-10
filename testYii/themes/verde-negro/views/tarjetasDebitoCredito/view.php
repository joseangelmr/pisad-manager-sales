<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $model TarjetasDebitoCredito */

$this->breadcrumbs=array(
	'Tarjetas Debito Creditos'=>array('index'),
	$model->ID_Pago,
);

$this->menu=array(
	array('label'=>'List TarjetasDebitoCredito', 'url'=>array('index')),
	array('label'=>'Create TarjetasDebitoCredito', 'url'=>array('create')),
	array('label'=>'Update TarjetasDebitoCredito', 'url'=>array('update', 'id'=>$model->ID_Pago)),
	array('label'=>'Delete TarjetasDebitoCredito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Pago),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TarjetasDebitoCredito', 'url'=>array('admin')),
);
?>

<h1>View TarjetasDebitoCredito #<?php echo $model->ID_Pago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Numero_Tarjeta',
		'ID_Pago',
		'monto_tarjeta',
	),
)); ?>
