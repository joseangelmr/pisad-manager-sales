<?php
if (Yii::app()->user->checkAccess("usuario")){ 
	$this->menu=array(
	array('label'=>'Volver al Carrito', 'url'=>array('//carrito/view','id'=>Yii::app()->user->getState('model_carrito')->ID_Carrito)),
	);
}
?>
<div class="form">
	<?php
		$model_selecciona = new Selecciona;
		$form=$this->beginWidget('CActiveForm', array(
		'id'=>'carrito-form',
		'enableAjaxValidation'=>false,
	));
?>
<div class="view">
	<table>
		<tr>	
				<td>
					<?php echo CHtml::image(Yii::app()->theme->baseUrl."/img/productos/".$model->ID_Producto.".jpg", '', array("width"=>"80", "height"=>"80")); ?> 
				</td>
				<td><font size="4" face="monospace"><?php echo CHtml::link(CHtml::encode($model->Nombre_Producto), array('producto/view', 'id'=>$model->ID_Producto)); ?></font><br /></td>
				<td>
					<div class="row">
						<?php echo $form->hiddenField($model_selecciona,'ID_Producto',array('value'=>$model->ID_Producto));	?>
						<?php echo $form->hiddenField($model_selecciona,'ID_Carrito',array('value'=>Yii::app()->user->getState('model_carrito')->ID_Carrito)); ?>
						<?php echo $form->labelEx($model_selecciona,'Cantidad'); ?>
						<?php echo $form->textField($model_selecciona,'Cantidad_Individual',array('value'=>$ctd)); ?>
						<?php echo $form->error($model_selecciona,'Cantidad_Individual'); ?>
					</div>
				</td>
				<td>
					<div class="row buttons">
						<?php echo CHtml::submitButton('Actualizar'); ?>
					</div>
				</td>
			</tr>
		<tr><td colspan="6"><hr></td></tr>
	</table>
</div>
<?php $this->endWidget(); ?>