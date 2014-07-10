<?php
/* @var $this SoporteTecnicoController */
/* @var $model SoporteTecnico */

$this->breadcrumbs=array(
	'Soporte Tecnicos'=>array('index'),
	$model->ID_Pregunta,
);

$this->menu=array(
	array('label'=>'List SoporteTecnico', 'url'=>array('index')),
	array('label'=>'Create SoporteTecnico', 'url'=>array('create')),
	array('label'=>'Update SoporteTecnico', 'url'=>array('update', 'id'=>$model->ID_Pregunta)),
	array('label'=>'Delete SoporteTecnico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Pregunta),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SoporteTecnico', 'url'=>array('admin')),
);
?>

<h1>View SoporteTecnico #<?php echo $model->ID_Pregunta; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Pregunta',
		'ID_Persona',
		'Fecha',
		'Pregunta',
		'Respuesta',
	),
)); ?>
