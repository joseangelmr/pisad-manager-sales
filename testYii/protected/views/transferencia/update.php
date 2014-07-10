<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */

$this->breadcrumbs=array(
	'Transferencias'=>array('index'),
	$model->ID_Pago=>array('view','id'=>$model->ID_Pago),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transferencia', 'url'=>array('index')),
	array('label'=>'Create Transferencia', 'url'=>array('create')),
	array('label'=>'View Transferencia', 'url'=>array('view', 'id'=>$model->ID_Pago)),
	array('label'=>'Manage Transferencia', 'url'=>array('admin')),
);
?>

<h1>Update Transferencia <?php echo $model->ID_Pago; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>