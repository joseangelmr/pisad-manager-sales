<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administradors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Administrador', 'url'=>array('index')),
	array('label'=>'Manage Administrador', 'url'=>array('admin')),
);
?>

<h1>Nuevo Administrador</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_persona'=>$model_persona)); ?>