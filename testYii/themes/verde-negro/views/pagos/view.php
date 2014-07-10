<?php
/* @var $this PagosController */
/* @var $model Pagos */

$this->breadcrumbs=array(
	'Pagoses'=>array('index'),
	$model->ID_Pago,
);
if (Yii::app()->user->checkAccess("administrador")){
	$this->menu=array(
		array('label'=>'List Pagos', 'url'=>array('index')),
		array('label'=>'Create Pagos', 'url'=>array('create')),
		array('label'=>'Update Pagos', 'url'=>array('update', 'id'=>$model->ID_Pago)),
		array('label'=>'Delete Pagos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_Pago),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Manage Pagos', 'url'=>array('admin')),
	);
	$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_Pago',
		'Monto',
		'ID_Carrito',
	),
	));
} 
?>
<h1>Metodos de Pago</h1>
<div class="form">
	<table>
		<tr>
			<td>
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'deposito-form',
					'enableAjaxValidation'=>false,
				)); 
				$model_deposito = new Deposito;
				?>
					<?php echo $form->hiddenField($model_deposito,'ID_Pago',array('value'=>$model->ID_Pago)); ?>
					<div class="row buttons">
						<?php echo CHtml::submitButton('Deposito'); ?>
					</div>
				<?php $this->endWidget(); ?>
			</td>
			<td>
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'deposito-form',
					'enableAjaxValidation'=>false,
				)); 
				$model_transferencia = new Transferencia;
				?>
					<?php echo $form->hiddenField($model_transferencia,'ID_Pago',array('value'=>$model->ID_Pago)); ?>
					<div class="row buttons">
						<?php echo CHtml::submitButton('Transferencia'); ?>
					</div>
				<?php $this->endWidget(); ?>
			</td>
			<td>
				<?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'deposito-form',
					'enableAjaxValidation'=>false,
				)); 
				$model_TarjetasDebitoCredito = new TarjetasDebitoCredito;
				?>
					<?php echo $form->hiddenField($model_TarjetasDebitoCredito,'ID_Pago',array('value'=>$model->ID_Pago)); ?>
					<div class="row buttons">
						<?php echo CHtml::submitButton('Debito o Credito'); ?>
					</div>
				<?php $this->endWidget(); ?>
			</td>
		</tr>
	</table>
</div><!-- form -->


