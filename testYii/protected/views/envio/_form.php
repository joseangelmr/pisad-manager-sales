<?php
/* @var $this EnvioController */
/* @var $model Envio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'envio-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Empresa'); ?>
		<?php echo $form->textField($model,'Nombre_Empresa',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre_Empresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Costo_Envio'); ?>
		<?php echo $form->textField($model,'Costo_Envio'); ?>
		<?php echo $form->error($model,'Costo_Envio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Detalles'); ?>
		<?php echo $form->textField($model,'Detalles',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Detalles'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->