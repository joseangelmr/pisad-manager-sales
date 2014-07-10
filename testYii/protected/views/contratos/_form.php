<?php
/* @var $this ContratosController */
/* @var $model Contratos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_Proveedor'); ?>
		<?php echo $form->textField($model,'ID_Proveedor'); ?>
		<?php echo $form->error($model,'ID_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Producto'); ?>
		<?php echo $form->textField($model,'Cantidad_Producto'); ?>
		<?php echo $form->error($model,'Cantidad_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Vigente'); ?>
		<?php echo $form->textField($model,'Vigente',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'Vigente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha_Contrato'); ?>
		<?php echo $form->textField($model,'Fecha_Contrato'); ?>
		<?php echo $form->error($model,'Fecha_Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'monto_total'); ?>
		<?php echo $form->textField($model,'monto_total'); ?>
		<?php echo $form->error($model,'monto_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->