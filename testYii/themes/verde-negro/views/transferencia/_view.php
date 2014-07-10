<?php
/* @var $this TransferenciaController */
/* @var $data Transferencia */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Pago), array('view', 'id'=>$data->ID_Pago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Transferencia')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Transferencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_transferido')); ?>:</b>
	<?php echo CHtml::encode($data->monto_transferido); ?>
	<br />


</div>