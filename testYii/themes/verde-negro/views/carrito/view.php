<?php
/* @var $this CarritoController */
/* @var $model Carrito */

$this->breadcrumbs=array(
	'Carritos'=>array('index'),
	$model->ID_Carrito,
); 
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Carrito', 'url'=>array('index')),
		array('label'=>'Create Carrito', 'url'=>array('create')),
		array('label'=>'Update Carrito', 'url'=>array('update', 'id'=>$model->ID_Carrito)),
		array('label'=>'Delete Carrito', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Carrito),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Carrito', 'url'=>array('admin')),
	);
}
if (Yii::app()->user->checkAccess("usuario")) {
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('//usuario/view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('//usuario/update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Agregar Producto', 'url'=>array('/producto')),
	array('label'=>'Historial de Compras', 'url'=>array('/factura')),
	array('label'=>'Preguntas', 'url'=>array('/soporteTecnico/create')),
	array('label'=>'Respuestas', 'url'=>array('/soporteTecnico')),
	);
}

?>
<h1>Mi Carrito</h1>

<?php if (Yii::app()->user->checkAccess("administrador")){ 
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Carrito',
		'ID_Usuario',
	),
)); 
}
	$ID_Carrito = Yii::app()->user->getState('model_carrito')->ID_Carrito;
	$connection=Yii::app()->db;
  $sql="SELECT ID_Producto, Cantidad_Individual
  			FROM carrito, selecciona 
  			WHERE carrito.ID_Carrito = selecciona.ID_Carrito and selecciona.ID_Carrito= $ID_Carrito";
  $command = $connection->createCommand($sql);
  $dataReader=$command->query();          
  $rows=$dataReader->readAll();
  //print_r($rows);

	echo $this->renderPartial('_view_carrito', array('rows'=>$rows, 'costo_total'=>$model->Costo_Total, 'ID_Carrito'=>$model->ID_Carrito));

	?> <br> <?php 
	if (!empty($rows))
		echo $this->renderPartial('//pagos/_form',array('model'=>$model));
	
	Yii::app()->user->setState('model_carrito',$model);
?>

