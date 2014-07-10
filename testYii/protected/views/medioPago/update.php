<?php
/* @var $this MedioPagoController */
/* @var $model MedioPago */

$this->breadcrumbs=array(
	'Medio Pagos'=>array('index'),
	$model->ID_Pago=>array('view','id'=>$model->ID_Pago),
	'Update',
);

$this->menu=array(
	array('label'=>'List MedioPago', 'url'=>array('index')),
	array('label'=>'Create MedioPago', 'url'=>array('create')),
	array('label'=>'View MedioPago', 'url'=>array('view', 'id'=>$model->ID_Pago)),
	array('label'=>'Manage MedioPago', 'url'=>array('admin')),
);
?>

<h1>Update MedioPago <?php echo $model->ID_Pago; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>