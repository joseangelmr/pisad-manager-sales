<?php
/* @var $this MedioPagoController */
/* @var $data MedioPago */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Pago), array('view', 'id'=>$data->ID_Pago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Pago')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Pago); ?>
	<br />


</div>