<?php
/* @var $this FacturaController */
/* @var $data Factura */
?>

<div class="view">

	<?php if($data->ID_Usuario == Yii::app()->user->getState('id_tipo')){ ?>

		<?php if (Yii::app()->user->checkAccess("administrador")){ ?>
			<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Factura')); ?>:</b>
			<?php echo CHtml::link(CHtml::encode($data->ID_Factura), array('view', 'id'=>$data->ID_Factura)); ?>
			<br />
		<?php } ?>
		
		<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha_Factura')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->Fecha_Factura), array('view', 'id'=>$data->ID_Factura)); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
		<?php echo CHtml::encode($data->Monto); ?>
		<br />
	
		<b><?php echo CHtml::encode($data->getAttributeLabel('Impuesto')); ?>:</b>
		<?php echo CHtml::encode($data->Impuesto); ?>
		<br />
	
		<?php if (Yii::app()->user->checkAccess("administrador")){ ?>
			<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Pago')); ?>:</b>
			<?php echo CHtml::encode($data->ID_Pago); ?>
			<br />
		
			<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Carrito')); ?>:</b>
			<?php echo CHtml::encode($data->ID_Carrito); ?>
			<br />
		<?php } ?>
		
	<?php } ?>

</div>