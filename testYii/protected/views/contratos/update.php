<?php
/* @var $this ContratosController */
/* @var $model Contratos */

$this->breadcrumbs=array(
	'Contratoses'=>array('index'),
	$model->ID_Contrato=>array('view','id'=>$model->ID_Contrato),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contratos', 'url'=>array('index')),
	array('label'=>'Create Contratos', 'url'=>array('create')),
	array('label'=>'View Contratos', 'url'=>array('view', 'id'=>$model->ID_Contrato)),
	array('label'=>'Manage Contratos', 'url'=>array('admin')),
);
?>

<h1>Update Contratos <?php echo $model->ID_Contrato; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>