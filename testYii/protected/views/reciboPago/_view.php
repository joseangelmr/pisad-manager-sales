<?php
/* @var $this ReciboPagoController */
/* @var $data ReciboPago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Recibo')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Recibo), array('view', 'id'=>$data->ID_Recibo)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Recibo_Pago')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Recibo_Pago); ?>
	<br />


</div>