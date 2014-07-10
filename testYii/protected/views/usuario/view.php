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
else if (Yii::app()->user->checkAccess("usuario") && ($model->ID_Persona == Yii::app()->user->id)){
	$this->menu=array(
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>$model->ID_Usuario)),
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
