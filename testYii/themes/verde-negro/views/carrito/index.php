<?php
/* @var $this CarritoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Carrito',
);

$this->menu=array(
	array('label'=>'Create Carrito', 'url'=>array('create')),
	array('label'=>'Manage Carrito', 'url'=>array('admin')),
);
?>

<h1>Mis Carritos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
