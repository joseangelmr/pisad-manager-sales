<?php
/* @var $this DireccionController */
/* @var $model Direccion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'direccion-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Pais'); ?>
		<?php echo $form->textField($model,'Pais',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Pais'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Estado'); ?>
		<?php echo $form->textField($model,'Estado',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Ciudad'); ?>
		<?php echo $form->textField($model,'Ciudad',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Ciudad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Codigo_Postal'); ?>
		<?php echo $form->textField($model,'Codigo_Postal'); ?>
		<?php echo $form->error($model,'Codigo_Postal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Persona'); ?>
		<?php echo $form->textField($model,'ID_Persona'); ?>
		<?php echo $form->error($model,'ID_Persona'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->