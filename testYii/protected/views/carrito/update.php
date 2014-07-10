<?php
/* @var $this CarritoController */
/* @var $model Carrito */

$this->breadcrumbs=array(
	'Carritos'=>array('index'),
	$model->ID_Carrito=>array('view','id'=>$model->ID_Carrito),
	'Update',
);

$this->menu=array(
	array('label'=>'List Carrito', 'url'=>array('index')),
	array('label'=>'Create Carrito', 'url'=>array('create')),
	array('label'=>'View Carrito', 'url'=>array('view', 'id'=>$model->ID_Carrito)),
	array('label'=>'Manage Carrito', 'url'=>array('admin')),
);
?>

<h1>Update Carrito <?php echo $model->ID_Carrito; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>