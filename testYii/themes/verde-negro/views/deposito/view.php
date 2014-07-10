<?php
/* @var $this DepositoController */
/* @var $model Deposito */

$this->breadcrumbs=array(
	'Depositos'=>array('index'),
	$model->ID_Pago,
);

$this->menu=array(
	array('label'=>'List Deposito', 'url'=>array('index')),
	array('label'=>'Create Deposito', 'url'=>array('create')),
	array('label'=>'Update Deposito', 'url'=>array('update', 'id'=>$model->ID_Pago)),
	array('label'=>'Delete Deposito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Pago),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Deposito', 'url'=>array('admin')),
);
?>

<h1>View Deposito #<?php echo $model->ID_Pago; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Numero_Deposito',
		'ID_Pago',
		'monto_depositado',
	),
)); ?>
