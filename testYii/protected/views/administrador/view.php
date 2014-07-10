<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administradors'=>array('index'),
	$model->ID_Administrador,
);

$this->menu=array(
	array('label'=>'List Administrador', 'url'=>array('index')),
	array('label'=>'Create Administrador', 'url'=>array('create')),
	array('label'=>'Update Administrador', 'url'=>array('update', 'id'=>$model->ID_Administrador)),
	array('label'=>'Delete Administrador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Administrador),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Administrador', 'url'=>array('admin')),
);
?>

<h1>View Administrador #<?php echo $model->ID_Administrador; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Administrador',
		'ID_Persona',
	),
)); ?>
