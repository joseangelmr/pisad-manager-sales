<?php
/* @var $this SoporteTecnicoController */
/* @var $data SoporteTecnico */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pregunta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Pregunta), array('view', 'id'=>$data->ID_Pregunta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Persona')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Persona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
	<?php echo CHtml::encode($data->Fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pregunta')); ?>:</b>
	<?php echo CHtml::encode($data->Pregunta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Respuesta')); ?>:</b>
	<?php echo CHtml::encode($data->Respuesta); ?>
	<br />


</div>