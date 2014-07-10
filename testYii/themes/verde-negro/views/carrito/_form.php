<?php
/* @var $this CarritoController */
/* @var $model Carrito */
/* @var $form CActiveForm */
?>

<div class="form">
	<?php
		$model_carrito = new Carrito; 
		$model_selecciona = new Selecciona;
		$form=$this->beginWidget('CActiveForm', array(
		'id'=>'carrito-form',
		'enableAjaxValidation'=>false,
	)); 
	?>
		<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

		<?php echo $form->errorSummary(array($model_carrito,$model_selecciona)); 

			echo $form->hiddenField($model_carrito,'Costo_Total',array('value'=>$model->Precio));
			echo $form->hiddenField($model_carrito,'ID_Carrito',array('value'=>Yii::app()->user->getState('model_carrito')->ID_Carrito));
			echo $form->hiddenField($model_carrito,'ID_Usuario',array('value'=>Yii::app()->user->getState('id_tipo')));
			
			echo $form->hiddenField($model_selecciona,'ID_Producto',array('value'=>$model->ID_Producto));	
			echo $form->hiddenField($model_selecciona,'ID_Carrito',array('value'=>Yii::app()->user->getState('model_carrito')->ID_Carrito));
			?>
			<div class="row">
				<?php echo $form->labelEx($model_selecciona,'Cantidad'); ?>
				<?php echo $form->textField($model_selecciona,'Cantidad_Individual',array('value'=>'1')); ?>
				<?php echo $form->error($model_selecciona,'Cantidad_Individual'); ?>
			</div>
		<div class="row buttons">
			<?php echo CHtml::submitButton($model_carrito->isNewRecord ? 'Agregar a Carrito' : 'Agregar a Carrito'); ?>
		</div>
	
	<?php $this->endWidget(); ?>
</div><!-- form -->
