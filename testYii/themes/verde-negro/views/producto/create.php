<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	'Create',
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Producto', 'url'=>array('index')),
		array('label'=>'Manage Producto', 'url'=>array('admin')),
	);
}
?>

<h1>Nuevo Producto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>