<?php
/* @var $this TransferenciaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Transferencias',
);

$this->menu=array(
	array('label'=>'Create Transferencia', 'url'=>array('create')),
	array('label'=>'Manage Transferencia', 'url'=>array('admin')),
);
?>

<h1>Transferencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
