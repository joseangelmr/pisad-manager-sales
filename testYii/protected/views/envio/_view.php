<?php
/* @var $this EnvioController */
/* @var $data Envio */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Envio')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Envio), array('view', 'id'=>$data->ID_Envio)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Empresa')); ?>:</b>
	<?php echo CHtml::encode($data->Nombre_Empresa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Costo_Envio')); ?>:</b>
	<?php echo CHtml::encode($data->Costo_Envio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Detalles')); ?>:</b>
	<?php echo CHtml::encode($data->Detalles); ?>
	<br />


</div>