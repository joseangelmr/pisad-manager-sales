<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $data TarjetasDebitoCredito */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Pago), array('view', 'id'=>$data->ID_Pago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Tarjeta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_tarjeta')); ?>:</b>
	<?php echo CHtml::encode($data->monto_tarjeta); ?>
	<br />


</div>