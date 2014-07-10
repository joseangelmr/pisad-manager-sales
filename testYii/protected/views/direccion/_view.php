<?php
/* @var $this DireccionController */
/* @var $data Direccion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Persona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Persona), array('view', 'id'=>$data->ID_Persona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pais')); ?>:</b>
	<?php echo CHtml::encode($data->Pais); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Estado')); ?>:</b>
	<?php echo CHtml::encode($data->Estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Ciudad')); ?>:</b>
	<?php echo CHtml::encode($data->Ciudad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Direccion')); ?>:</b>
	<?php echo CHtml::encode($data->Direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Codigo_Postal')); ?>:</b>
	<?php echo CHtml::encode($data->Codigo_Postal); ?>
	<br />


</div>