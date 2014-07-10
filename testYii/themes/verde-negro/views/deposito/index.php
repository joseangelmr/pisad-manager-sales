<?php
/* @var $this DepositoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Depositos',
);

$this->menu=array(
	array('label'=>'Create Deposito', 'url'=>array('create')),
	array('label'=>'Manage Deposito', 'url'=>array('admin')),
);
?>

<h1>Depositos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
