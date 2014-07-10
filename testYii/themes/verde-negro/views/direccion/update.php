<?php
/* @var $this DireccionController */
/* @var $model Direccion */

$this->breadcrumbs=array(
	'Direccions'=>array('index'),
	$model->ID_Persona=>array('view','id'=>$model->ID_Persona),
	'Update',
);

$this->menu=array(
	array('label'=>'List Direccion', 'url'=>array('index')),
	array('label'=>'Create Direccion', 'url'=>array('create')),
	array('label'=>'View Direccion', 'url'=>array('view', 'id'=>$model->ID_Persona)),
	array('label'=>'Manage Direccion', 'url'=>array('admin')),
);
?>

<h1>Update Direccion <?php echo $model->ID_Persona; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>