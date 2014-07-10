<?php
/* @var $this DepositoController */
/* @var $data Deposito */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Pago), array('view', 'id'=>$data->ID_Pago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Numero_Deposito')); ?>:</b>
	<?php echo CHtml::encode($data->Numero_Deposito); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_depositado')); ?>:</b>
	<?php echo CHtml::encode($data->monto_depositado); ?>
	<br />


</div>