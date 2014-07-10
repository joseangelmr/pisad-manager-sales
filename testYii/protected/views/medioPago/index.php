<?php
/* @var $this MedioPagoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Medio Pagos',
);

$this->menu=array(
	array('label'=>'Create MedioPago', 'url'=>array('create')),
	array('label'=>'Manage MedioPago', 'url'=>array('admin')),
);
?>

<h1>Medio Pagos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
