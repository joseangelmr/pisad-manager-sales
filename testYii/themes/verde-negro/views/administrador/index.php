<?php
/* @var $this AdministradorController */
/* @var $dataProvider CActiveDataProvider */
?>
<table><tr><td valign="bottom"><h3>Bienvenido</h3></td><td><h1><? echo Yii::app()->user->getState('Nombre'); ?></h1></td></tr></table>

<?
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Administrar Personas', 'url'=>array('/persona/admin')),
	array('label'=>'Administrar Usuarios', 'url'=>array('/usuario/admin')),
	array('label'=>'Administrar Proveedores', 'url'=>array('/proveedor/admin')),
	array('label'=>'Administrar Productos', 'url'=>array('/producto/admin')),
	array('label'=>'Soporte Tecnico', 'url'=>array('/soporteTecnico/admin')),
	);
?>
