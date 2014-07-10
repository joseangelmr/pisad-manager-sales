<?php
/* @var $this EnvioController */
/* @var $model Envio */

$this->breadcrumbs=array(
	'Envios'=>array('index'),
	$model->ID_Envio=>array('view','id'=>$model->ID_Envio),
	'Update',
);

$this->menu=array(
	array('label'=>'List Envio', 'url'=>array('index')),
	array('label'=>'Create Envio', 'url'=>array('create')),
	array('label'=>'View Envio', 'url'=>array('view', 'id'=>$model->ID_Envio)),
	array('label'=>'Manage Envio', 'url'=>array('admin')),
);
?>

<h1>Update Envio <?php echo $model->ID_Envio; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>