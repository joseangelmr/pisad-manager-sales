<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'producto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Nombre_Producto'); ?>
		<?php echo $form->textField($model,'Nombre_Producto',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'Nombre_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Inicial'); ?>
		<?php echo $form->textField($model,'Cantidad_Inicial'); ?>
		<?php echo $form->error($model,'Cantidad_Inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Cantidad_Restante'); ?>
		<?php echo $form->textField($model,'Cantidad_Restante'); ?>
		<?php echo $form->error($model,'Cantidad_Restante'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Peso'); ?>
		<?php echo $form->textField($model,'Peso'); ?>
		<?php echo $form->error($model,'Peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Precio'); ?>
		<?php echo $form->textField($model,'Precio'); ?>
		<?php echo $form->error($model,'Precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tamano'); ?>
		<?php echo $form->textField($model,'Tamano'); ?>
		<?php echo $form->error($model,'Tamano'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->