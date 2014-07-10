<?php
/* @var $this EnvioController */
/* @var $model Envio */

$this->breadcrumbs=array(
	'Envios'=>array('index'),
	$model->ID_Envio,
);

$this->menu=array(
	array('label'=>'List Envio', 'url'=>array('index')),
	array('label'=>'Create Envio', 'url'=>array('create')),
	array('label'=>'Update Envio', 'url'=>array('update', 'id'=>$model->ID_Envio)),
	array('label'=>'Delete Envio', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Envio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Envio', 'url'=>array('admin')),
);
?>

<h1>View Envio #<?php echo $model->ID_Envio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Envio',
		'Nombre_Empresa',
		'Costo_Envio',
		'Detalles',
	),
)); ?>
