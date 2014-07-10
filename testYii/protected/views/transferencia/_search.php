<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Numero_Transferencia'); ?>
		<?php echo $form->textField($model,'Numero_Transferencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Pago'); ?>
		<?php echo $form->textField($model,'ID_Pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_transferido'); ?>
		<?php echo $form->textField($model,'monto_transferido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->