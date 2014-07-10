<?php
/* @var $this ProductoController */
/* @var $model Producto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_Producto'); ?>
		<?php echo $form->textField($model,'ID_Producto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Nombre_Producto'); ?>
		<?php echo $form->textField($model,'Nombre_Producto',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad_Inicial'); ?>
		<?php echo $form->textField($model,'Cantidad_Inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Cantidad_Restante'); ?>
		<?php echo $form->textField($model,'Cantidad_Restante'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Peso'); ?>
		<?php echo $form->textField($model,'Peso'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textArea($model,'Descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Precio'); ?>
		<?php echo $form->textField($model,'Precio'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tamano'); ?>
		<?php echo $form->textField($model,'Tamano'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->