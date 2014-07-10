<?php
/* @var $this TransferenciaController */
/* @var $model Transferencia */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transferencia-form',
	'enableAjaxValidation'=>true,
)); 
?>

	<p class="note">Campos con<span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Numero_Transferencia'); ?>
		<?php echo $form->textField($model,'Numero_Transferencia'); ?>
		<?php echo $form->error($model,'Numero_Transferencia'); ?>
	</div>

	<?php echo $form->hiddenField($model,'ID_Pago',array('value'=>$_GET['id'])); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'monto_transferido'); ?>
		<?php echo $form->textField($model,'monto_transferido'); ?>
		<?php echo $form->error($model,'monto_transferido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Verificar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->