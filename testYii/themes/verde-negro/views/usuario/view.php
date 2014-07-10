<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->ID_Usuario,
);
$model_persona=Persona::model()->findByPk($model->ID_Persona); 
$model_direccion=Direccion::model()->findByPk($model->ID_Persona); 

if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'Ver Usuarios', 'url'=>array('index')),
		array('label'=>'Crear Usuario', 'url'=>array('create')),
		array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->ID_Usuario)),
		array('label'=>'Borrar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Usuario),'confirm'=>'Are you sure you want to delete this item?')),
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

<h1>Usuario</h1>

<?php  
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model_persona,
		'attributes'=>array(
			'User',
			'Nombre',
			'Correo',
			'Telefono',
		),
	)); 
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model_direccion,
		'attributes'=>array(
			'Pais',
			'Estado',
			'Ciudad',
			'Direccion',
			'Codigo_Postal',
		),
	));	


?>
