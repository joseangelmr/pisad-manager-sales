<?php
/* @var $this SoporteTecnicoController */
/* @var $model SoporteTecnico */

$this->breadcrumbs=array(
	'Soporte Tecnicos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SoporteTecnico', 'url'=>array('index')),
	array('label'=>'Manage SoporteTecnico', 'url'=>array('admin')),
);
?>

<h1>Create SoporteTecnico</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>