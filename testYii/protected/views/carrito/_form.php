<?php
/* @var $this CarritoController */
/* @var $model Carrito */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carrito-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Costo_Total'); ?>
		<?php echo $form->textField($model,'Costo_Total'); ?>
		<?php echo $form->error($model,'Costo_Total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Usuario'); ?>
		<?php echo $form->textField($model,'ID_Usuario'); ?>
		<?php echo $form->error($model,'ID_Usuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_expiracion'); ?>
		<?php echo $form->textField($model,'fecha_expiracion'); ?>
		<?php echo $form->error($model,'fecha_expiracion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->