<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array('id'=>'usuario-form',
	'enableAjaxValidation'=>true,)); 
	
	if ($model->isNewRecord==false) { 
		$model_persona=Persona::model()->findByPk($model->ID_Persona); 
		$model=Usuario::model()->findByPk($model->ID_Usuario); 
		$model_direccion=Direccion::model()->findByPk($model->ID_Persona); 
	}
?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary(array($model,$model_persona,$model_direccion)); ?>
	
	<?php if ($model->isNewRecord==false) 
					echo $form->hiddenField($model,'ID_Persona');
				else
					echo $form->hiddenField($model,'ID_Persona',array('value'=>'1'));
	?>
	<?php if ($model->isNewRecord==false){
					echo $form->hiddenField($model_persona,'User');
				}
				else{
					?>
						<div class="row">
							<?php echo $form->labelEx($model_persona,'User'); ?>
							<?php echo $form->textField($model_persona,'User',array('size'=>50,'maxlength'=>50)); ?>
							<?php echo $form->error($model_persona,'User'); ?>
						</div>
					<?php
				}
	?>			
	<div class="row">
		<?php echo $form->labelEx($model_persona,'Correo'); ?>
		<?php echo $form->textField($model_persona,'Correo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model_persona,'Correo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_persona,'Nombre'); ?>
		<?php echo $form->textField($model_persona,'Nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model_persona,'Nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model_persona,'Telefono'); ?>
		<?php echo $form->textField($model_persona,'Telefono',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model_persona,'Telefono'); ?>
	</div>
	
	<?php echo $form->hiddenField($model_persona,'tipo',array('value'=>'u')); ?>
	
	<?php if ($model->isNewRecord==false){
					echo $form->hiddenField($model_persona,'Clave');
		?>
		<div class="row">
				<?php echo $form->labelEx($model_persona,'Nueva Clave'); ?>
				<?php echo $form->passwordField($model_persona,'nclave',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model_persona,'nclave'); ?>
		</div>
	<?php
	} else{
	?>
		<div class="row">
				<?php echo $form->labelEx($model_persona,'Clave'); ?>
				<?php echo $form->passwordField($model_persona,'Clave',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model_persona,'Clave'); ?>
		</div>
		<?php
	}
	?>
	
	<?php if ($model->isNewRecord==false){
					echo $form->hiddenField($model_direccion,'ID_Persona');
					?>
					<div class="row">
						<?php echo $form->labelEx($model_direccion,'Pais'); ?>
						<?php echo $form->textField($model_direccion,'Pais',array('size'=>30,'maxlength'=>30)); ?>
						<?php echo $form->error($model_direccion,'Pais'); ?>
					</div>
				
					<div class="row">
						<?php echo $form->labelEx($model_direccion,'Estado'); ?>
						<?php echo $form->textField($model_direccion,'Estado',array('size'=>30,'maxlength'=>30)); ?>
						<?php echo $form->error($model_direccion,'Estado'); ?>
					</div>
				
					<div class="row">
						<?php echo $form->labelEx($model_direccion,'Ciudad'); ?>
						<?php echo $form->textField($model_direccion,'Ciudad',array('size'=>30,'maxlength'=>30)); ?>
						<?php echo $form->error($model_direccion,'Ciudad'); ?>
					</div>
				
					<div class="row">
						<?php echo $form->labelEx($model_direccion,'Direccion'); ?>
						<?php echo $form->textField($model_direccion,'Direccion',array('size'=>60,'maxlength'=>150)); ?>
						<?php echo $form->error($model_direccion,'Direccion'); ?>
					</div>
				
					<div class="row">
						<?php echo $form->labelEx($model_direccion,'Codigo_Postal'); ?>
						<?php echo $form->textField($model_direccion,'Codigo_Postal'); ?>
						<?php echo $form->error($model_direccion,'Codigo_Postal'); ?>
					</div>	
									
					<?php	
				}			
				else {
					echo $form->hiddenField($model_direccion,'ID_Persona',array('value'=>'1'));
					echo $form->hiddenField($model_direccion,'Pais');
					echo $form->hiddenField($model_direccion,'Estado'); 
					echo $form->hiddenField($model_direccion,'Ciudad'); 
					echo $form->hiddenField($model_direccion,'Direccion');
					echo $form->hiddenField($model_direccion,'Codigo_Postal');
				}
	?>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrarse' : 'Actualizar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
