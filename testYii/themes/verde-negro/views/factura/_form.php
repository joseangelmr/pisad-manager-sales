<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'factura-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
		<?php echo $form->error($model,'Monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Impuesto'); ?>
		<?php echo $form->textField($model,'Impuesto'); ?>
		<?php echo $form->error($model,'Impuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Factura'); ?>
		<?php echo $form->textField($model,'Fecha_Factura'); ?>
		<?php echo $form->error($model,'Fecha_Factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Pago'); ?>
		<?php echo $form->textField($model,'ID_Pago'); ?>
		<?php echo $form->error($model,'ID_Pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Carrito'); ?>
		<?php echo $form->textField($model,'ID_Carrito'); ?>
		<?php echo $form->error($model,'ID_Carrito'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Usuario'); ?>
		<?php echo $form->textField($model,'ID_Usuario'); ?>
		<?php echo $form->error($model,'ID_Usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->