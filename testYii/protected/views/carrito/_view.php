<?php
/* @var $this CarritoController */
/* @var $data Carrito */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Carrito')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Carrito), array('view', 'id'=>$data->ID_Carrito)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costo_Total')); ?>:</b>
	<?php echo CHtml::encode($data->Costo_Total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_expiracion')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_expiracion); ?>
	<br />


</div>