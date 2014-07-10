<?php
/* @var $this ProveedorController */
/* @var $dataProvider CActiveDataProvider */
?>

<table><tr><td valign="bottom"><h3>Bienvenido</h3></td><td><h1><? echo Yii::app()->user->getState('Nombre'); ?></h1></td></tr></table>

<?
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Crear Contratos', 'url'=>array('/contratos/create')),
	array('label'=>'Historial de Contratos', 'url'=>array('/contratos')),
	array('label'=>'Historial Cobros', 'url'=>array('/reciboPago')),
	array('label'=>'Soporte Tecnico', 'url'=>array('/soporteTecnico')),
	);
?>

