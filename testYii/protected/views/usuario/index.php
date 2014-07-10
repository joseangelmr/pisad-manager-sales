<?php
/* @var $this UsuarioController */
/* @var $dataProvider CActiveDataProvider */
?>

<table><tr><td valign="bottom"><h3>Bienvenido</h3></td><td><h1><? echo Yii::app()->user->getState('Nombre'); ?></h1></td></tr></table>

<?
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Carrito de Compra', 'url'=>array('/carrito')),
	array('label'=>'Historial de Compras', 'url'=>array('/factura')),
	array('label'=>'Soporte Tecnico', 'url'=>array('/soporteTecnico')),
	);
?>

