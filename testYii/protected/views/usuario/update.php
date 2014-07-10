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
?>

<h1>Actualizar</h1>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'model_persona'=>$model_persona, 'model_direccion'=>$model_direccion)); ?>