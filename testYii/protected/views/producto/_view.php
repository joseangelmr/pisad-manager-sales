<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">
	<? if (Yii::app()->user->checkAccess("administrador")){ ?>
		<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Producto')); ?>:</b>
		<?php echo CHtml::link(CHtml::encode($data->ID_Producto), array('view', 'id'=>$data->ID_Producto)); ?>
		<br />
	<? } ?>
		
	<b><?php echo CHtml::encode($data->getAttributeLabel('Nombre_Producto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Nombre_Producto), array('view', 'id'=>$data->ID_Producto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad_Inicial')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad_Inicial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cantidad_Restante')); ?>:</b>
	<?php echo CHtml::encode($data->Cantidad_Restante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Peso')); ?>:</b>
	<?php echo CHtml::encode($data->Peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->Descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
	<?php echo CHtml::encode($data->Precio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tamano')); ?>:</b>
	<?php echo CHtml::encode($data->Tamano); ?>
	<br />

</div>