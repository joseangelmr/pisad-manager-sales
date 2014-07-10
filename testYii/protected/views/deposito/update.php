<?php
/* @var $this DepositoController */
/* @var $model Deposito */

$this->breadcrumbs=array(
	'Depositos'=>array('index'),
	$model->ID_Pago=>array('view','id'=>$model->ID_Pago),
	'Update',
);

$this->menu=array(
	array('label'=>'List Deposito', 'url'=>array('index')),
	array('label'=>'Create Deposito', 'url'=>array('create')),
	array('label'=>'View Deposito', 'url'=>array('view', 'id'=>$model->ID_Pago)),
	array('label'=>'Manage Deposito', 'url'=>array('admin')),
);
?>

<h1>Update Deposito <?php echo $model->ID_Pago; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>