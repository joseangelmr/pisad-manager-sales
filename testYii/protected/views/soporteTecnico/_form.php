<?php
/* @var $this SoporteTecnicoController */
/* @var $model SoporteTecnico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'soporte-tecnico-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Persona'); ?>
		<?php echo $form->textField($model,'ID_Persona'); ?>
		<?php echo $form->error($model,'ID_Persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha'); ?>
		<?php echo $form->textField($model,'Fecha'); ?>
		<?php echo $form->error($model,'Fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pregunta'); ?>
		<?php echo $form->textArea($model,'Pregunta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Pregunta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Respuesta'); ?>
		<?php echo $form->textArea($model,'Respuesta',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Respuesta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->