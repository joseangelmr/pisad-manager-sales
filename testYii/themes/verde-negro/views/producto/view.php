<?php
/* @var $this ProductoController */
/* @var $model Producto */

$this->breadcrumbs=array(
	'Productos'=>array('index'),
	$model->ID_Producto,
);
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
if (Yii::app()->user->checkAccess("proveedor")) {
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('//proveedor/view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('//proveedor/update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Crear Contratos', 'url'=>array('/contratos/create')),
	array('label'=>'Historial de Contratos', 'url'=>array('/contratos')),
	array('label'=>'Solicitar Cobros', 'url'=>array('/reciboPago/create')),
	array('label'=>'Historial Cobros', 'url'=>array('/reciboPago')),
	array('label'=>'Preguntas', 'url'=>array('/soporteTecnico/create')),
	array('label'=>'Respuestas', 'url'=>array('/soporteTecnico')),
	);
}
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Producto', 'url'=>array('index')),
		array('label'=>'Create Producto', 'url'=>array('create')),
		array('label'=>'Update Producto', 'url'=>array('update', 'id'=>$model->ID_Producto)),
		array('label'=>'Delete Producto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Producto),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Producto', 'url'=>array('admin')),
	);
	?>
	<h1><?php echo $model->Nombre_Producto; ?></h1>
	<center><?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/productos/".$model->ID_Producto.".jpg", '', array("width"=>"250", "height"=>"250"))?></center>
	<br />
		<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'Nombre_Producto',
			'Cantidad_Inicial',
			'Cantidad_Restante',
			'Peso',
			'Descripcion',
			'Tamano',
			'Precio',
		),
	));
}
else { 
?>
	<h1><?php echo $model->Nombre_Producto; ?></h1>
	<center><?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/productos/".$model->ID_Producto.".jpg", '', array("width"=>"250", "height"=>"250"))?></center>
	<br />
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'Nombre_Producto',
			'Peso',
			'Descripcion',
			'Tamano',
			'Precio',
		),
	));
	if (Yii::app()->user->checkAccess("usuario")){
		?> <br> <?php 
		echo $this->renderPartial('//carrito/_form',array('model'=>$model));
	}
}
	
