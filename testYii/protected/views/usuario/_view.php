<?php
/* @var $this UsuarioController */
/* @var $data Usuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Usuario')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Usuario), array('view', 'id'=>$data->ID_Usuario)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Persona')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Persona); ?>
	<br />


</div>