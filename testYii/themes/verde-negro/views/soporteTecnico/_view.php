<?php
/* @var $this SoporteTecnicoController */
/* @var $data SoporteTecnico */
?>

<div class="view">
	
	<?php if($data->ID_Persona == Yii::app()->user->id){ ?>

		<?php if (Yii::app()->user->checkAccess("administrador")){ ?>
			<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pregunta')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->ID_Pregunta), array('view', 'id'=>$data->ID_Pregunta)); ?>
			<br />
		<?php } ?>
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->Fecha), array('view', 'id'=>$data->ID_Pregunta)); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('Pregunta')); ?>:</b>
		<?php echo CHtml::encode($data->Pregunta); ?>
		<br />
	
		<?php if(!empty($data->Respuesta)){ ?>
			<b><?php echo CHtml::encode($data->getAttributeLabel('Respuesta')); ?>:</b>
			<?php echo CHtml::encode($data->Respuesta); ?>
			<br />
		<?php } ?>
	<?php } ?>

</div>