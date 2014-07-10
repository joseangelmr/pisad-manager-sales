<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	$model->ID_Pago=>array('view','id'=>$model->ID_Pago),
	'Update',
);

$this->menu=array(
	array('label'=>'List Pagos', 'url'=>array('index')),
	array('label'=>'Create Pagos', 'url'=>array('create')),
	array('label'=>'View Pagos', 'url'=>array('view', 'id'=>$model->ID_Pago)),
	array('label'=>'Manage Pagos', 'url'=>array('admin')),
);
?>

<h1>Update Pagos <?php echo $model->ID_Pago; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>