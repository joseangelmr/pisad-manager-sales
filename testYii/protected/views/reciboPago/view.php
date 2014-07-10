<?php
/* @var $this ReciboPagoController */
/* @var $model ReciboPago */

$this->breadcrumbs=array(
	'Recibo Pagos'=>array('index'),
	$model->ID_Recibo,
);

$this->menu=array(
	array('label'=>'List ReciboPago', 'url'=>array('index')),
	array('label'=>'Create ReciboPago', 'url'=>array('create')),
	array('label'=>'Update ReciboPago', 'url'=>array('update', 'id'=>$model->ID_Recibo)),
	array('label'=>'Delete ReciboPago', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Recibo),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReciboPago', 'url'=>array('admin')),
);
?>

<h1>View ReciboPago #<?php echo $model->ID_Recibo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Recibo',
		'descripcion',
		'Monto',
		'Fecha_Recibo_Pago',
	),
)); ?>
