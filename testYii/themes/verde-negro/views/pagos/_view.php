<?php
/* @var $this PagosController */
/* @var $data Pagos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pago')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Pago), array('view', 'id'=>$data->ID_Pago)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode($data->Monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Carrito')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Carrito); ?>
	<br />


</div>