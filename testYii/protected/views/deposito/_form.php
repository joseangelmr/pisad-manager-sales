<?php
/* @var $this DepositoController */
/* @var $model Deposito */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'deposito-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero_Deposito'); ?>
		<?php echo $form->textField($model,'Numero_Deposito'); ?>
		<?php echo $form->error($model,'Numero_Deposito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Pago'); ?>
		<?php echo $form->textField($model,'ID_Pago'); ?>
		<?php echo $form->error($model,'ID_Pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_depositado'); ?>
		<?php echo $form->textField($model,'monto_depositado'); ?>
		<?php echo $form->error($model,'monto_depositado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->