<?php
/* @var $this FacturaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Facturas',
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'Create Factura', 'url'=>array('create')),
		array('label'=>'Manage Factura', 'url'=>array('admin')),
	);
}
if (Yii::app()->user->checkAccess("usuario")) {
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('//usuario/view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('//usuario/update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Ver Carrito de Compra', 'url'=>array('/carrito/view','id'=>Yii::app()->user->getState('model_carrito')->ID_Carrito)),
	array('label'=>'Historial de Compras', 'url'=>array('/factura')),
	array('label'=>'Preguntas', 'url'=>array('/soporteTecnico/create')),
	array('label'=>'Respuestas', 'url'=>array('/soporteTecnico')),
	);
}

?>

<h1>Facturas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
