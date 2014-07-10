<?php
/* @var $this AdministradorController */
/* @var $dataProvider CActiveDataProvider */
?>
<table><tr><td valign="bottom"><h3>Bienvenido</h3></td><td><h1><? echo Yii::app()->user->getState('Nombre'); ?></h1></td></tr></table>

<?
$this->menu=array(
	array('label'=>'Mis Datos', 'url'=>array('view', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Actualizar Datos', 'url'=>array('update', 'id'=>Yii::app()->user->getState('id_tipo'))),
	array('label'=>'Personas', 'url'=>array('/persona/admin')),
	array('label'=>'Usuarios', 'url'=>array('/usuario/admin')),
	array('label'=>'Proveedores', 'url'=>array('/proveedor/admin')),
	array('label'=>'Carritos de Compra', 'url'=>array('/carrito/admin')),
	array('label'=>'Facturas de Usuarios', 'url'=>array('/factura/admin')),
	array('label'=>'Contratos de Proveedores', 'url'=>array('/contratos/admin')),
	array('label'=>'Pagos a Proveedores', 'url'=>array('/reciboPago/admin')),
	array('label'=>'Soporte Tecnico', 'url'=>array('/soporteTecnico/admin')),
	);
?>
