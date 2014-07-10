<?php
/* @var $this ReciboPagoController */
/* @var $model ReciboPago */

$this->breadcrumbs=array(
	'Recibo Pagos'=>array('index'),
	$model->ID_Recibo=>array('view','id'=>$model->ID_Recibo),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReciboPago', 'url'=>array('index')),
	array('label'=>'Create ReciboPago', 'url'=>array('create')),
	array('label'=>'View ReciboPago', 'url'=>array('view', 'id'=>$model->ID_Recibo)),
	array('label'=>'Manage ReciboPago', 'url'=>array('admin')),
);
?>

<h1>Update ReciboPago <?php echo $model->ID_Recibo; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>