<?php
/* @var $this CarritoController */
/* @var $model Carrito */

$this->breadcrumbs=array(
	'Carritos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Carrito', 'url'=>array('index')),
	array('label'=>'Manage Carrito', 'url'=>array('admin')),
);
?>

<h1>Nuevo Carrito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
