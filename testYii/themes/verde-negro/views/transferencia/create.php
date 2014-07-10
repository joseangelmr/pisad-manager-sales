<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */

$this->breadcrumbs=array(
	'Transferencias'=>array('index'),
	'Create',
);

if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Transferencia', 'url'=>array('index')),
		array('label'=>'Manage Transferencia', 'url'=>array('admin')),
	);
}
else {
	$this->menu=array(
		array('label'=>'Regresar', 'url'=>array('//pagos/view', 'id'=>$_GET['id'])),
	);
}
?>
<h1>Transferencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>