<?php
/* @var $this SoporteTecnicoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Soporte Tecnicos',
);

$this->menu=array(
	array('label'=>'Create SoporteTecnico', 'url'=>array('create')),
	array('label'=>'Manage SoporteTecnico', 'url'=>array('admin')),
);
?>

<h1>Soporte Tecnicos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
