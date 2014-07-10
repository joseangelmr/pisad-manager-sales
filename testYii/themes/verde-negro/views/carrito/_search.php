<?php
/* @var $this CarritoController */
/* @var $model Carrito */
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
		<?php echo $form->label($model,'ID_Carrito'); ?>
		<?php echo $form->textField($model,'ID_Carrito'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Costo_Total'); ?>
		<?php echo $form->textField($model,'Costo_Total'); ?>
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