<?php
/* @var $this ReciboPagoController */
/* @var $model ReciboPago */

$this->breadcrumbs=array(
	'Recibo Pagos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReciboPago', 'url'=>array('index')),
	array('label'=>'Manage ReciboPago', 'url'=>array('admin')),
);
?>

<h1>Create ReciboPago</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>