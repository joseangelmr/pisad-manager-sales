<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tarjetas Debito Creditos',
);

$this->menu=array(
	array('label'=>'Create TarjetasDebitoCredito', 'url'=>array('create')),
	array('label'=>'Manage TarjetasDebitoCredito', 'url'=>array('admin')),
);
?>

<h1>Tarjetas Debito Creditos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
