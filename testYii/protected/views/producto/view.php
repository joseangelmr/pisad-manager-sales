<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->ID_Producto,
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Producto', 'url'=>array('index')),
		array('label'=>'Create Producto', 'url'=>array('create')),
		array('label'=>'Update Producto', 'url'=>array('update', 'id'=>$model->ID_Producto)),
		array('label'=>'Delete Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Producto),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Producto', 'url'=>array('admin')),
	);
}
if (Yii::app()->user->checkAccess("usuario")){
	$this->menu=array(
		array('label'=>'Agregar al carrito', 'url'=>array('index')),
	);
}

?>

<h1><?php echo $model->Nombre_Producto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'Nombre_Producto',
		'Cantidad_Inicial',
		'Cantidad_Restante',
		'Peso',
		'Descripcion',
		'Precio',
		'Tamano',
	),
)); ?>
