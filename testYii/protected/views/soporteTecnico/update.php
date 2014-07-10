<?php
/* @var $this SoporteTecnicoController */
/* @var $model SoporteTecnico */

$this->breadcrumbs=array(
	'Soporte Tecnicos'=>array('index'),
	$model->ID_Pregunta=>array('view','id'=>$model->ID_Pregunta),
	'Update',
);

$this->menu=array(
	array('label'=>'List SoporteTecnico', 'url'=>array('index')),
	array('label'=>'Create SoporteTecnico', 'url'=>array('create')),
	array('label'=>'View SoporteTecnico', 'url'=>array('view', 'id'=>$model->ID_Pregunta)),
	array('label'=>'Manage SoporteTecnico', 'url'=>array('admin')),
);
?>

<h1>Update SoporteTecnico <?php echo $model->ID_Pregunta; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>