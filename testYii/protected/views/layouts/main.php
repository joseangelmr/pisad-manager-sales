<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.corner.js" type="text/javascript"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/corners.js" type="text/javascript"></script>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

	<!--<div id="login_tap" class="corner_tap">
		<?php $this->widget('zii.widgets.CMenu',array('items'=>array(
				array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)))); ?>
	</div>
	<div id="registrar_tap" class="corner_tap">
		<?php $this->widget('zii.widgets.CMenu',array('items'=>array( array('label'=>'Registrarse', 'url'=>array('/persona/create'))))); ?>
	</div> -->
<div class="container" id="page">
	<div id="header">
		<div id="logo">
			<table><tr><td>
			<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kiosko.png" /></td>
			<td><?php echo CHtml::encode(Yii::app()->name); ?></td></tr></table>
		</div>
	</div><!-- header -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'Acerca de', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contactenos', 'url'=>array('/site/contact')),
				array('label'=>'Ingresar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Productos', 'url'=>array('/producto')),
				
				array('label'=>'Perfil', 'url'=>array('/administrador'), 'visible'=>Yii::app()->user->checkAccess("administrador")),
				array('label'=>'Perfil', 'url'=>array('/proveedor'), 'visible'=>Yii::app()->user->checkAccess("proveedor")),
				array('label'=>'Perfil', 'url'=>array('/usuario'), 'visible'=>Yii::app()->user->checkAccess("usuario")),
				
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Registrar Usuario', 'url'=>array('/usuario/create'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Registrar Proveedor', 'url'=>array('/proveedor/create'),'visible'=>Yii::app()->user->isGuest),
			),
		)); ?>
	</div><!-- mainmenu -->
	<div id="color_page">
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
			)); ?><!-- breadcrumbs -->
		<?php endif?>
	
		<?php echo $content; ?>
		
		<div class="clear"></div>
	</div>
</div><!-- page -->
<br /><br /><br /><br />
<div id="footer">
	<p>Copyright &copy; <?php echo date('Y'); ?> PISAD! Es un software libre publicado bajo la Licencia Publica General GNU</p>
	<p>Puede copiar, modificar y distribuir el contenido de esta pagina respetando los derechos de la licencia publica genera</p>
	<?php //echo Yii::powered(); ?>
</div><!-- footer -->

</body>
</html>
