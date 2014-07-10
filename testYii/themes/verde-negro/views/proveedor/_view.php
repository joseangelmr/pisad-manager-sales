<?php
/* @var $this ProveedorController */
/* @var $data Proveedor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Proveedor')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Proveedor), array('view', 'id'=>$data->ID_Proveedor)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Persona')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RIF')); ?>:</b>
	<?php echo CHtml::encode($data->RIF); ?>
	<br />


</div>