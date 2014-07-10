<?php
/* @var $this ContratosController */
/* @var $model Contratos */

$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	$model->ID_Contrato,
);

$this->menu=array(
	array('label'=>'List Contratos', 'url'=>array('index')),
	array('label'=>'Create Contratos', 'url'=>array('create')),
	array('label'=>'Update Contratos', 'url'=>array('update', 'id'=>$model->ID_Contrato)),
	array('label'=>'Delete Contratos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Contrato),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contratos', 'url'=>array('admin')),
);
?>

<h1>View Contratos #<?php echo $model->ID_Contrato; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Contrato',
		'ID_Proveedor',
		'Cantidad_Producto',
		'Vigente',
		'Descripcion',
		'Fecha_Contrato',
		'monto_total',
		'estado',
	),
)); ?>
