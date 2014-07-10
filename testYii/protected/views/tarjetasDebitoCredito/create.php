<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $model TarjetasDebitoCredito */

$this->breadcrumbs=array(
	'Tarjetas Debito Creditos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TarjetasDebitoCredito', 'url'=>array('index')),
	array('label'=>'Manage TarjetasDebitoCredito', 'url'=>array('admin')),
);
?>

<h1>Create TarjetasDebitoCredito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>