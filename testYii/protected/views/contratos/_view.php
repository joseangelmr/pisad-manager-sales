<?php
/* @var $this ContratosController */
/* @var $data Contratos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Contrato')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Contrato), array('view', 'id'=>$data->ID_Contrato)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Proveedor')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Proveedor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad_Producto')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad_Producto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Vigente')); ?>:</b>
	<?php echo CHtml::encode($data->Vigente); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Contrato')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha_Contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('monto_total')); ?>:</b>
	<?php echo CHtml::encode($data->monto_total); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	*/ ?>

</div>