<?php
/* @var $this AdministradorController */
/* @var $data Administrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Administrador')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_Administrador), array('view', 'id'=>$data->ID_Administrador)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Persona')); ?>:</b>
	<?php echo CHtml::encode($data->ID_Persona); ?>
	<br />


</div>