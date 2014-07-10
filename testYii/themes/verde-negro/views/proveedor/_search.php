<?php
/* @var $this ProveedorController */
/* @var $model Proveedor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_Proveedor'); ?>
		<?php echo $form->textField($model,'ID_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Persona'); ?>
		<?php echo $form->textField($model,'ID_Persona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'RIF'); ?>
		<?php echo $form->textField($model,'RIF',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->