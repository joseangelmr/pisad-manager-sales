<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	'Create',
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Proveedor', 'url'=>array('index')),
		array('label'=>'Manage Proveedor', 'url'=>array('admin')),
	);
}
?>

<h1>Nuevo Proveedor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_persona'=>$model_persona, 'model_direccion'=>$model_direccion)); ?>