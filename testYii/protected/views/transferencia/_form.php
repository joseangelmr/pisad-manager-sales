<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transferencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero_Transferencia'); ?>
		<?php echo $form->textField($model,'Numero_Transferencia'); ?>
		<?php echo $form->error($model,'Numero_Transferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Pagos'); ?>
		<?php echo $form->textField($model,'ID_Pagos'); ?>
		<?php echo $form->error($model,'ID_Pagos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_transferido'); ?>
		<?php echo $form->textField($model,'monto_transferido'); ?>
		<?php echo $form->error($model,'monto_transferido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->