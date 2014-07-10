<?php
/* @var $this ReciboPagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recibo Pagos',
);

$this->menu=array(
	array('label'=>'Create ReciboPago', 'url'=>array('create')),
	array('label'=>'Manage ReciboPago', 'url'=>array('admin')),
);
?>

<h1>Recibo Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
