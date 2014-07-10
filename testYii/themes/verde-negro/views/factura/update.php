<?php
/* @var $this FacturaController */
/* @var $model Factura */

$this->breadcrumbs=array(
	'Facturas'=>array('index'),
	$model->ID_Factura=>array('view','id'=>$model->ID_Factura),
	'Update',
);

$this->menu=array(
	array('label'=>'List Factura', 'url'=>array('index')),
	array('label'=>'Create Factura', 'url'=>array('create')),
	array('label'=>'View Factura', 'url'=>array('view', 'id'=>$model->ID_Factura)),
	array('label'=>'Manage Factura', 'url'=>array('admin')),
);
?>

<h1>Update Factura <?php echo $model->ID_Factura; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>