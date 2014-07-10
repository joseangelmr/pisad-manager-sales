<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $model TarjetasDebitoCredito */

$this->breadcrumbs=array(
	'Tarjetas Debito Creditos'=>array('index'),
	$model->ID_Pago=>array('view','id'=>$model->ID_Pago),
	'Update',
);

$this->menu=array(
	array('label'=>'List TarjetasDebitoCredito', 'url'=>array('index')),
	array('label'=>'Create TarjetasDebitoCredito', 'url'=>array('create')),
	array('label'=>'View TarjetasDebitoCredito', 'url'=>array('view', 'id'=>$model->ID_Pago)),
	array('label'=>'Manage TarjetasDebitoCredito', 'url'=>array('admin')),
);
?>

<h1>Update TarjetasDebitoCredito <?php echo $model->ID_Pago; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>