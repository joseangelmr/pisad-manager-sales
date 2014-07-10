<?php
/* @var $this FacturaController */
/* @var $data Factura */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Factura')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Factura), array('view', 'id'=>$data->ID_Factura)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Impuesto')); ?>:</b>
	<?php echo CHtml::encode($data->Impuesto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Factura')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Factura); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pago')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Carrito')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Carrito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Usuario')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Usuario); ?>
	<br />


</div>