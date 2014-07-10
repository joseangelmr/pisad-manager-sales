<?php
/* @var $this UsuarioController */
/* @var $model Usuario */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	'Create',
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
	array('label'=>'Ver Usuarios', 'url'=>array('index')),
	array('label'=>'Manejar Usuarios', 'url'=>array('admin')),
	);
}
?>

<h1>Nuevo Usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_persona'=>$model_persona, 'model_direccion'=>$model_direccion)); ?>