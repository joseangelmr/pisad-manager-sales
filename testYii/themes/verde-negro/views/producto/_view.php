<?php
/* @var $this ProductoController */
/* @var $data Producto */
?>

<div class="view">
	<table>
		<tr>
			<td>
				<?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/productos/".CHtml::encode($data->ID_Producto).".jpg", '', array("width"=>"150", "height"=>"150"))?> 
			</td>
			<td>
				<?php if (Yii::app()->user->checkAccess("administrador")){ ?>
					<b><?php echo CHtml::encode($data->getAttributeLabel('ID_Producto')); ?>:</b>
					<?php echo CHtml::link(CHtml::encode($data->ID_Producto), array('view', 'id'=>$data->ID_Producto)); ?>
					<br />
				<? } ?>
					
				<font size="5" face="monospace"><?php echo CHtml::link(CHtml::encode($data->Nombre_Producto), array('view', 'id'=>$data->ID_Producto)); ?></font>
				<br />
				
				<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion')); ?>:</b>
				<?php echo substr(CHtml::encode($data->Descripcion), 0,100).'...'; ?>
				<br />
				
				<b><?php echo CHtml::encode($data->getAttributeLabel('Peso')); ?>:</b>
				<?php echo CHtml::encode($data->Peso); ?>
				<br />
			
				<b><?php echo CHtml::encode($data->getAttributeLabel('Tamano')); ?>:</b>
				<?php echo CHtml::encode($data->Tamano); ?>
				<br />
				
				<b><?php echo CHtml::encode($data->getAttributeLabel('Precio')); ?>:</b>
				<font size="4" face="monospace"><b><?php echo CHtml::encode($data->Precio); ?></b></font>
				<br />
			</td>
		</tr>
	</table>
</div>