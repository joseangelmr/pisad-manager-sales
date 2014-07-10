<?php
/* @var $this DireccionController */
/* @var $model Direccion */

$this->breadcrumbs=array(
	'Direccions'=>array('index'),
	$model->ID_Persona,
);

$this->menu=array(
	array('label'=>'List Direccion', 'url'=>array('index')),
	array('label'=>'Create Direccion', 'url'=>array('create')),
	array('label'=>'Update Direccion', 'url'=>array('update', 'id'=>$model->ID_Persona)),
	array('label'=>'Delete Direccion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Persona),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Direccion', 'url'=>array('admin')),
);
?>

<h1>View Direccion #<?php echo $model->ID_Persona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Pais',
		'Estado',
		'Ciudad',
		'Direccion',
		'Codigo_Postal',
		'ID_Persona',
	),
)); ?>
