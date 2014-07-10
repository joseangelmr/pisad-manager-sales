<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Update',
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'Ver Usuarios', 'url'=>array('index')),
		array('label'=>'Crear Usuarios', 'url'=>array('create')),
		array('label'=>'Ver Usuario', 'url'=>array('view', 'id'=>$model->ID_Usuario)),
		array('label'=>'Manejar Usuario', 'url'=>array('admin')),
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

<h1>Actualizar</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_persona'=>$model_persona, 'model_direccion'=>$model_direccion)); ?>