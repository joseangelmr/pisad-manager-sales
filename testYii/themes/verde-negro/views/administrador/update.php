<?php
/* @var $this AdministradorController */
/* @var $model Administrador */

$this->breadcrumbs=array(
	'Administradors'=>array('index'),
	$model->ID_Administrador=>array('view','id'=>$model->ID_Administrador),
	'Update',
);

$this->menu=array(
	array('label'=>'List Administrador', 'url'=>array('index')),
	array('label'=>'Create Administrador', 'url'=>array('create')),
	array('label'=>'View Administrador', 'url'=>array('view', 'id'=>$model->ID_Administrador)),
	array('label'=>'Manage Administrador', 'url'=>array('admin')),
);
?>

<h1>Actualizar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_persona'=>$model_persona)); ?>