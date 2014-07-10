<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="language" content="en" />

  <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/favicon.ico" type="image/x-icon" >

  <!-- blueprint CSS framework -->
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/screen.css" media="screen, projection" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/print.css" media="print" />
  <!--[if lt IE 8]>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" />

  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.7.2.min.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr-2.0.6.min.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.corner.js"></script>
  <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/corners.js"></script>

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>


</head>

<body>

<div class="container" id="wrapper">
<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kiosko.png" /></td>
  <header id="header">
    
    <div id="logo"><?php echo CHtml::link(CHtml::encode(Yii::app()->name), '/testYii/'); ?></div>


    <nav id="mainmenu">
      <?php
        $menuItems = array(
        array('label'=>'Inicio', 'url'=>array('/site/index')),
        array('label'=>'Entrar', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Productos', 'url'=>array('/producto')),
        
        array('label'=>'Menú de '.Yii::app()->user->name.' (Admin)', 'url'=>array('/administrador'), 'visible'=>Yii::app()->user->checkAccess("administrador")),
        array('label'=>'Menú de '.Yii::app()->user->name.' (Proveedor)', 'url'=>array('/proveedor'), 'visible'=>Yii::app()->user->checkAccess("proveedor")),
        array('label'=>'Menú de '.Yii::app()->user->name.' (Usuario)', 'url'=>array('/usuario'), 'visible'=>Yii::app()->user->checkAccess("usuario")),
        
        array('label'=>'Cerrar sesión', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
        array('label'=>'Registrar Usuario', 'url'=>array('/usuario/create'), 'visible'=>Yii::app()->user->isGuest),
        array('label'=>'Registrar Proveedor', 'url'=>array('/proveedor/create'),'visible'=>Yii::app()->user->isGuest),
        
        );
      ?>
      <?php $this->widget('zii.widgets.CMenu',array(
        'items'=>$menuItems,
        'firstItemCssClass'=>'first',
        'lastItemCssClass'=>'last',
      )); ?>
    </nav><!-- mainmenu -->
  </header><!-- header -->

  <div id="main-wrapper"><div id="main" role="main">
    <?php echo $content; ?>
  </div></div><!-- main -->

</div><!-- wrapper -->
<br /><br /><br />
<div id="footer">
	Copyright &copy; <?php echo date('Y'); ?><a href="#"> PISAD!</a> Es un software libre publicado bajo la Licencia Publica General GNU<br />
	Puede copiar, modificar y distribuir el contenido de esta pagina respetando los derechos de la licencia publica general.
	<?php //echo Yii::powered(); ?>
</div><!-- footer -->

</body>
</html>
