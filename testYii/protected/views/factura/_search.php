<?php
/* @var $this FacturaController */
/* @var $model Factura */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_Factura'); ?>
		<?php echo $form->textField($model,'ID_Factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Monto'); ?>
		<?php echo $form->textField($model,'Monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Impuesto'); ?>
		<?php echo $form->textField($model,'Impuesto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Factura'); ?>
		<?php echo $form->textField($model,'Fecha_Factura'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Pago'); ?>
		<?php echo $form->textField($model,'ID_Pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Carrito'); ?>
		<?php echo $form->textField($model,'ID_Carrito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Usuario'); ?>
		<?php echo $form->textField($model,'ID_Usuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->