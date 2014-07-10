<?php
/* @var $this CarritoController */
/* @var $model Carrito */

$this->breadcrumbs=array(
	'Carritos'=>array('index'),
	$model->ID_Carrito,
);

$this->menu=array(
	array('label'=>'List Carrito', 'url'=>array('index')),
	array('label'=>'Create Carrito', 'url'=>array('create')),
	array('label'=>'Update Carrito', 'url'=>array('update', 'id'=>$model->ID_Carrito)),
	array('label'=>'Delete Carrito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Carrito),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carrito', 'url'=>array('admin')),
);
?>

<h1>View Carrito #<?php echo $model->ID_Carrito; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Carrito',
		'Costo_Total',
		'ID_Usuario',
		'estado',
		'fecha_expiracion',
	),
)); ?>
