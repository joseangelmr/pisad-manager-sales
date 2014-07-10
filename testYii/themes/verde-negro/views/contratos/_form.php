<?php
/* @var $this ContratosController */
/* @var $model Contratos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'contratos-form',
	'enableAjaxValidation'=>true,)); 
	
	if ($model->isNewRecord==false) { 
		$model=Contratos::model()->findByPk($model->ID_Contrato); 
	}
?>

		<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($model)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Producto'); ?>
		<?php echo $form->textField($model,'Cantidad_Producto'); ?>
		<?php echo $form->error($model,'Cantidad_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_total'); ?>
		<?php echo $form->textField($model,'monto_total'); ?>
		<?php echo $form->error($model,'monto_total'); ?>
	</div>

	<?php if ($model->isNewRecord==true){
					echo $form->hiddenField($model,'estado');
				}
				else{
					?>
	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>
					<?php
				}
	?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear contrato' : 'Actualizar contrato'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
