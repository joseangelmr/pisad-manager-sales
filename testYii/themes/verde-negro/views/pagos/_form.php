<?php
/* @var $this PagosController */
/* @var $model Pagos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pagos-form',
	'enableAjaxValidation'=>true,
)); 
	$model_pagos=new Pagos;
?>
		
		<?php echo $form->hiddenField($model_pagos,'Monto',array('value'=>$model->Costo_Total)); ?>
		<?php echo $form->hiddenField($model_pagos,'ID_Carrito',array('value'=>$model->ID_Carrito)); ?>

	<div align="right">
		<?php echo CHtml::submitButton("Metodos de Pago"); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

