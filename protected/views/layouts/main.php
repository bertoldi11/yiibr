<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	
	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/protected/ext/bootstrap/assets/css/bootstrap.min.css'); ?>
	<!--
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	-->
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<?php Yii::app()->clientScript->registerCssFile(Yii::app()->request->baseUrl.'/css/base.css'); ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="page-header" style="text-align: center;">
	<h1><?php echo CHtml::image('/images/yiibr_logo_menor.png', 'Yii BR' );?> <small>Aprender YII nunca foi tão fácil.</small></h1>
</div>
<div>
	<?php $this->widget('bootstrap.widgets.TbNavbar',array(
			'brand' => 'YiiBr',
			'items' => array(
				array(
					'class' => 'bootstrap.widgets.TbMenu',
					'items' => array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'Blog', 'url'=>'http://yiibr.com.br/blog/'),
						array('label'=>'Forum', 'url'=>'http://yiibr.com.br/forum/'),
						array('label'=>'Perfil', 'url'=>array('/perfil/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Usuário', 'url'=>array('/usuario/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Hangouts', 'url'=>array('/hangouts/index'), 'visible'=>!Yii::app()->user->isGuest),
						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
						array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
					),
				),
			),
		)
	); ?>
</div>
<div class="container" id="page">
	<?php
		// Widget para exibir mensagens para o usuário.
		$this->widget('bootstrap.widgets.TbAlert', array(
		    'block'=>false, // display a larger alert block?
		    'fade'=>true, // use transitions?
		    'closeText'=>'×', // close link text - if set to false, no close link is displayed
		));
	?>

	<!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>
</div><!-- page -->

<footer class="footer">
	<div class="container">
        <p class="copy">Copyright &copy; 2013 by <a target="_blank" href="https://groups.google.com/forum/?hl=pt-BR#!forum/yii-framework-brasil"> Yii Framework Brasil </a><br />
        	All Rights Reserved.
        </p>
    </div>
</footer>

</body>
</html>
