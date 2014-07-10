<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $model TarjetasDebitoCredito */

$this->breadcrumbs=array(
	'Tarjetas Debito Creditos'=>array('index'),
	'Create',
);

if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Tarjetas Debito Credito', 'url'=>array('index')),
		array('label'=>'Manage Tarjetas Debito Credito', 'url'=>array('admin')),
	);
}
else {
	$this->menu=array(
		array('label'=>'Regresar', 'url'=>array('//pagos/view', 'id'=>$_GET['id'])),
	);
}
?>

<h1>Tarjetas Debito Credito</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>