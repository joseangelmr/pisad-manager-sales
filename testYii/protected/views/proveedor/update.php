<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */

$this->breadcrumbs=array(
	'Proveedors'=>array('index'),
	$model->ID_Proveedor=>array('view','id'=>$model->ID_Proveedor),
	'Update',
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'Ver Proveedores', 'url'=>array('index')),
		array('label'=>'Crear Proveedor', 'url'=>array('create')),
		array('label'=>'Ver Proveedor', 'url'=>array('view', 'id'=>$model->ID_Proveedor)),
		array('label'=>'Manejar Proveedor', 'url'=>array('admin')),
	);
}
?>

<h1>Actualizar</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_persona'=>$model_persona, 'model_direccion'=>$model_direccion)); ?>