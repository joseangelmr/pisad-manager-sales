<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $model TarjetasDebitoCredito */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Numero_Tarjeta'); ?>
		<?php echo $form->textField($model,'Numero_Tarjeta'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ID_Pago'); ?>
		<?php echo $form->textField($model,'ID_Pago'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto_tarjeta'); ?>
		<?php echo $form->textField($model,'monto_tarjeta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->