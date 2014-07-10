<?php
/* @var $this TarjetasDebitoCreditoController */
/* @var $model TarjetasDebitoCredito */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tarjetas-debito-credito-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero_Tarjeta'); ?>
		<?php echo $form->textField($model,'Numero_Tarjeta'); ?>
		<?php echo $form->error($model,'Numero_Tarjeta'); ?>
	</div>
	<?php echo $form->hiddenField($model,'ID_Pago',array('value'=>$_GET['id'])); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'Monto a Pagar'); ?>
		<?php echo $form->textField($model,'monto_tarjeta'); ?>
		<?php echo $form->error($model,'monto_tarjeta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Verificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->