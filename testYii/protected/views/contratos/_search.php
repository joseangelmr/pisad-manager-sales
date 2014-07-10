<?php
/* @var $this ContratosController */
/* @var $model Contratos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_Contrato'); ?>
		<?php echo $form->textField($model,'ID_Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Proveedor'); ?>
		<?php echo $form->textField($model,'ID_Proveedor'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad_Producto'); ?>
		<?php echo $form->textField($model,'Cantidad_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Vigente'); ?>
		<?php echo $form->textField($model,'Vigente',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Fecha_Contrato'); ?>
		<?php echo $form->textField($model,'Fecha_Contrato'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_total'); ?>
		<?php echo $form->textField($model,'monto_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->